<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends Model
{   
    use SoftDeletes;

    protected $fillable =[
        
        'name',

        'description',

        'benifit',

        'highlight',

        'salary',

        'closed_date',

        'limit_post',

        'job_category_id',

        'company_id',

        'contact_email',

        'contact_number',

    ];

    public function Company()
    {
    	return $this->belongsTo('App\Company');
    }


    public function JobCategory()
    {
    	return $this->belongsTo('App\JobCategory');
    }

    
    public function Applicants()
    {
    	return $this->hasMany('App\Applicant');
    }


}
