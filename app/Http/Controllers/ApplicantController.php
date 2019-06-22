<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicantInsertFormRequest;
use App\Applicant;
use App\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplicantController extends Controller
{
    public function applicantlist()
    {
        $applicants = Applicant::all();
        return view('applicant.list',compact('applicants'));
    }


    public function applicantprofile($id)
    {
        $applicant = Applicant::find($id);
        return view('applicant.applicantprofile',compact('applicant'));
    }

    public function create()
    {   
        $jobs = Job::all();
        $user = Auth::user();
        return view('applicant.create',compact('jobs','user'));
    }

    public function store(ApplicantInsertFormRequest $request)

    {   
        $file1 = $request->file('attachment_file_name');
        $filename1 = uniqid().'_'.$file1->getClientOriginalName();
        $file1->move(public_path().'/uploads/cvfile/',$filename1);

        $file2 = $request->file('cv_file_name');
        $filename2 = uniqid().'_'.$file2->getClientOriginalName();
        $file2->move(public_path().'/uploads/cvfile/',$filename2);

        // Storage::put('cvfile/'.$file->getClientOriginalName(),file_get_contents($file));
        // dd($request->all());
        Applicant::create([

            'user_id'=>$request->get('user_id'),
            'name' =>$request->get('name'),
            'dob' =>$request->get('dob'),
            'nrc' =>$request->get('nrc'),
            'email' =>$request->get('email'),
            'phone' =>$request->get('phone'),
            'nationality' =>$request->get('nationality'),
            'race' =>$request->get('race'),
            'religion' =>$request->get('religion'),
            'education' =>$request->get('education'),
            'marital_status' =>$request->get('marital_status'),
            'township' =>$request->get('township'), 
            'address' =>$request->get('address'),
            'attachment_file_name' => $file1->getClientOriginalName(),
            'cv_file_name' => $file2->getClientOriginalName(),
            'job_id' =>$request->get('job_id'),

        ]);

        return redirect('/applicant/create')->with('status','Apply Success');
    }
}
