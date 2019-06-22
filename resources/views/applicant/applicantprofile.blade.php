@extends('layouts.master')

@section('title','applicant-profile')

@section('content')

{{-- job details form --}}

    <div class="container-fluid mt-3">

            <div class="col-md-8 m-auto">
                    
                <div class="card mb-3">

                <div class="card-header bg-info text-center text-white"><h3> {{ $applicant->name }} </h3></div>

                        <h5 class="card-footer">Post Date --><small>{{ $applicant->created_at}}</small></h5>

                        <div class="card-body">

                            <h5 class="card-title">Education</h5>

                            <p class="card-text">{{ $applicant->education }}</p>

                            <hr>

                            <h5 class="card-title">Job</h5>

                            <p class="card-text">{{ $applicant->job->name}}</p>

                            <hr>

                            <h5 class="card-title">Birthday</h5>

                            <p class="card-text">{{ $applicant->dob }}</p>
                            
                            <hr>

                            <h5 class="card-title">NRC</h5>

                            <p class="card-text">{{ $applicant->nrc }}</p>
                            
                            <hr>

                            <h5 class="card-title">Nationality</h5>

                            <p class="card-text">{{ $applicant->nationality}}</p>
                            
                            <hr>

                            <h5 class="card-title">Race</h5>

                            <p class="card-text">{{ $applicant->race }}</p>
                            
                            <hr>

                            <h5 class="card-title">Marital Status</h5>

                            <p class="card-text">{{ $applicant->marital_status }}</p>
                            
                            <hr>

                            <h5 class="card-title">Religion</h5>

                            <p class="card-text">{{ $applicant->religion }}</p>
                            
                            <hr>

                            <h5 class="card-title">Email</h5>

                            <p class="card-text">{{ $applicant->email }}</p>
                            
                            <hr>

                            <h5 class="card-title">Phone</h5>

                            <p class="card-text">{{ $applicant->phone }}</p>
                            
                            <hr>

                            <h5 class="card-title">Township</h5>

                            <p class="card-text">{{ $applicant->township }}</p>
                            
                            <hr>

                            <h5 class="card-title">Address</h5>

                            <p class="card-text">{{ $applicant->address }}</p>
                            
                            <hr>
                            

                </div>
        
             </div>

    </div>

@endsection