<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
//use illuminate\Eloquent\Model;

class POS extends Model
{
    protected $fillable = [

        ];
    public function pos()
    {

    }
    public function products()
    {
        return $this->hasMany('App\Product');

    }
    public function clients()
    {
        return $this->hasMany('App\Client');

    }
    public function incomes()
    {
        return $this->hasMany('App\Income');

    }
    public function User()
    {
        return $this->hasOne('App\User', 'user_id', 'id');
    }
}
