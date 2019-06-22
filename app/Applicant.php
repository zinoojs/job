<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [

            'user_id',
            'name',
            'dob',
            'nrc',
            'email',
            'phone',
            'nationality',
            'race',
            'religion',
            'education',
            'marital_status',
            'township', 
            'address',
            'attachment_file_name',
            'cv_file_name',
            'job_id',

    ];

    public function job()
    {
		return $this->belongsTo(Job::class);
	}

	public function Experiences()
	{
		return $this->hasMany(Experience::class);
	}

	public function Skills()
	{
		return $this->hasMany(Skill::class);
	}

	public function Educations()
	{
		return $this->hasMany(Education::class);
	}
}
