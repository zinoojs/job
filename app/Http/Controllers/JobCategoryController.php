<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCategory;
use App\Http\Requests\JobCategoryInsertFormRequest;

class JobCategoryController extends Controller

{
    public function index()

    {   
        $jobcategories = JobCategory::all();

        return view('jobcategory.jobcatlist',compact('jobcategories'));

    }


    public function create()

    {
        return view('jobcategory.create');
    }


    public function edit($id)

    {
        $jobcategory = JobCategory::find($id);

        return view('jobcategory.edit',compact('jobcategory'));
    }

    public function update($id)
    {
        # code...
    }

    public function delete($id)
    {
        
    }

    public function store(JobCategoryInsertFormRequest $request)

    {
        JobCategory::create([

            'name'=>$request->get('name'),

        ]);

        return redirect('/jobcategory/create')->with('status','Post Inert Success');
    }
}
