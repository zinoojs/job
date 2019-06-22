@extends('layouts.master')

@section('title','applicant-create')

@section('content')

{{-- Applicant create form --}}

    <div class="container-fluid mt-3">

        <div class="col-md-6 m-auto">

            <form action="" method="POST" enctype="multipart/form-data" multiple>
                @csrf

                <h2 class="text-center mb-4 p-2 bg-info text-white rounded-lg rounded">CV Resume</h2>
                
                @foreach ($errors->all() as $error)

                    <p class="alert alert-danger">{{$error}}</p>

                @endforeach

                @if (session('status'))

                    <p class="alert alert-success">{{session('status')}}</p>

                 @endif

                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="your name">
                </div>


                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input  type="email" name="email" id="email" value="{{$user->email}}" class="form-control" placeholder="email address">
                </div>


                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="phone number">
                </div>


                <div class="form-group">
                    <label for="nrc">NRC Number</label>
                    <input type="text" name="nrc" class="form-control" placeholder="NRC">
                </div>


                <div class="form-group">
                    <label for="race">Race</label>
                    <input type="text" name="race" class="form-control" placeholder="race">
                </div>


                <div class="form-group">
                    <label for="dob">Birthday</label>
                    <input type="date" name="dob" class="form-control" placeholder="birthday">
                </div>

                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" name="nationality" class="form-control" placeholder="nationality">
                </div>

                <div class="form-group">
                    <label for="religion">Religion</label>
                    <input type="text" name="religion" class="form-control" placeholder="religion">
                </div>

                <div class="form-group">
                    <label for="education">Education</label>
                    <input type="text" name="education" class="form-control" placeholder="education">
                </div>

                <div class="form-group">
                    <label for="education">Martials Status</label>
                    <select name="marital_status" id="" class="form-control">
                        <option value="">Select --</option>
                        <option value="married">Married</option>
                        <option value="single">Single</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="township">Township</label>
                    <input type="text" name="township" class="form-control" placeholder="township">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="address">
                </div>

                <div class="form-group">
                    <label for="job">Select Your Job</label>

                    <select name="job_id" id="" class="form-control">
                        <option value="">Select job</option>

                        @foreach ($jobs as $job)
                    <option value="{{$job->id}}">{{$job->name}}</option>
                        @endforeach

                    </select>

                </div>

                <div class="form-group">
                    <label for="attachment_file_name">Upload Attachement File</label>
                    <input type="file" name="attachment_file_name" class="form-control" placeholder="attachment_file_name">
                </div>

                <div class="form-group">
                    <label for="cv_file_name">Upload Your CV</label>
                    <input type="file" name="cv_file_name" class="form-control" placeholder="cv_file_name">
                </div>

                <input type="submit" class="btn btn-primary" value="Submit">

            </form>
        
        </div>
   
    </div>

@endsection