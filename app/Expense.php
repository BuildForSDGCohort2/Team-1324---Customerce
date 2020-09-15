<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $guarded = [];

    public function User()
    {
    	return $this->hasOne('App\User', 'user_id', 'id');
    }
}
