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
}
