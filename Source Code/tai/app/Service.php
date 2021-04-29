<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    public $primaryKey = 'service_id';
    public $timestamps = true;

    public function ServiceGiver()
    {
        return $this->belongsTo(Service_giver::class, 'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'service_user', 'service_id', 'user_id');

    }
}
