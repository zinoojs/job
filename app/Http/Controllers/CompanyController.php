<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests\CompanyInsertFormRequest;
// use Faker\Provider\ar_SA\Company;

class CompanyController extends Controller

{
    public function companylist()

    {
        $compaines = Company::all();

        return view('company.companylist',compact('compaines'));
    }

    public function create()

    {

        return view('company.create');

    }

    public function store(CompanyInsertFormRequest $request)
    {
        // dd($request);
        Company::create([

            'name'=>$request->get('name'),
            'industry'=>$request->get('industry'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'state'=>$request->get('state'),
            'township'=>$request->get('township'),

        ]);

        return redirect('/company/create')->with('status','Post Success');
    }
}
