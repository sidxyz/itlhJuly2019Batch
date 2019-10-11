<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];

    public function comment()
    {
    	return $this->hasMany('App\Comment');
    }
}
