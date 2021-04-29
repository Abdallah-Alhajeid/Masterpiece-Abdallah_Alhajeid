<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    public $primaryKey = 'user_id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'national_id', 'user_name', 'user_number', 'password', 'email', 'user_image', 'user_age',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function services()
    {
        $serviceUsers = DB::select(
            DB::raw('SELECT service_id from service_user
            group by service_id
            order by  COUNT(service_id)
            desc
            limit 20'));
        $serviceUsers = collect($serviceUsers)->pluck('service_id')->toArray();
        $services = Service::WhereIn('service_id', $serviceUsers)->get();

        return $this->belongsToMany(Service::class, 'service_user', 'user_id', 'service_id')->withPivot('date', 'time', );
    }
    public function serviceUsers()
    {
        return $this->belongsToMany(ServiceUser::class, 'service_user', 'service_id', 'user_id', 'service_user_id')->withPivot('date', 'time', );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'user_id');
    }
}
