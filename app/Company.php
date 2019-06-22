<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [

        'name','industry','email','phone','state','township',

    ];

    public function jobs()
    
	{
		return $this->hasMany('App\Job');
	}
}
