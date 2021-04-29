<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ServiceUser extends Model
{
    protected $table = "service_user";
    public $primaryKey = "service_user_id";
    public $timestamps = true;

    public function user()
    {
        return $this->belongsToMany(Service::class, 'service_user', 'service_id', 'user_id')->withPivot('date', 'time', );
    }
}
