@extends('layouts.master')

@section('title','Job-details')

@section('content')

{{-- job details form --}}

    <div class="container-fluid mt-3">

            <div class="col-md-8 m-auto">
                    
                <div class="card mb-3">

                <div class="card-header bg-info text-center text-white"><h3> {{ $job->name }} </h3></div>

                    <h5 class="card-footer">Post Date --><small>{{ $job->created_at}}</small></h5>

                    <div class="card-body">

                        <h5 class="card-title">Description</h5>

                        <p class="card-text">{{ $job->description }}</p>

                        <hr>

                        <h5 class="card-title">Benefit</h5>

                        <p class="card-text">{{ $job->benifit }}</p>

                        <hr>

                        <h5 class="card-title">Highlight</h5>

                        <p class="card-text">{{ $job->highlight }}</p>
                        
                        <hr>

                        <h5 class="card-title">Salary</h5>

                        <p class="card-text">{{ $job->salary }}</p>
                        
                        <hr>

                        <h5 class="card-title">Company</h5>

                        <p class="card-text">{{ $job->company->name }}</p>
                        
                        <hr>

                        <h5 class="card-title">Job Category</h5>

                        <p class="card-text">{{ $job->jobcategory->name }}</p>
                        
                        <hr>

                        <h5 class="card-title">Email</h5>

                        <p class="card-text">{{ $job->contact_email }}</p>
                        
                        <hr>

                        <h5 class="card-title">Phone</h5>

                        <p class="card-text">{{ $job->contact_number }}</p>
                        
                        <hr>
                            
                        @if (Route::has('login'))

                            @auth

                            <p class="card-text"><a href="{{url('/applicant/create')}}" class="btn btn-primary">To Apply</a></p>
                                
                            @else

                            <p class="card-text">To Apply the Jobs You Need to first Register (or) Sign In </p>
                                
                            <a href="{{ route('login') }}" class="p-3"><b>Login</b> &nbsp;|&nbsp; </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"> <b>Register</b> </a>
                                @endif
                            
                            @endauth
                        
                        @endif

                </div>
        
            </div>

    </div>

@endsection