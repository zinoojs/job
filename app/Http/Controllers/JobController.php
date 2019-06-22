<?php

namespace App\Http\Controllers;
use App\Job;
use App\JobCategory;
use App\Company;

use Illuminate\Http\Request;
use App\Http\Requests\JobInsertFormRequest;

class JobController extends Controller

{   

    public function joblist()

    {   
        $jobs = Job::all();

        $jobcategories = JobCategory::all();


        return view('job.joblist',compact('jobs','jobcategories'));
    }

    public function jobdetails($id)

    {   

        $job = Job::find($id);
        
        // dd($job);

        return view('job.jobdetails',compact('job'));

    }


    public function create()

    {   
        $jobcategories = JobCategory::all();

        $compaines = Company::all();

        return view('job.create',compact('jobcategories','compaines'));
        
    }


    public function store(JobInsertFormRequest $request)

    {
        Job::create([

            'name'=>$request->get('name'),
            
            'benifit'=>$request->get('benifit'),

            'highlight'=>$request->get('highlight'),

            'contact_email'=>$request->get('contact_email'),

            'contact_number'=>$request->get('contact_number'),

            'company_id'=>$request->get('company_id'),

            'job_category_id'=>$request->get('job_category_id'),

            'description'=>$request->get('description'),

            'salary'=>$request->get('salary'),

            'closed_date'=>$request->get('closed_date'),

            'limit_post'=>$request->get('limit_post'),

        ]);

        return redirect('/job/create')->with('status','Post Inert Success');

        // dd($request);

    }
}
