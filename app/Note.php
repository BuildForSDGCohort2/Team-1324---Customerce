<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = [];

    public function User()
    {
    	return $this->hasOne('App\User', 'user_id', 'id');
    }
}
