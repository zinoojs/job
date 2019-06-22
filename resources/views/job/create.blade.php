@extends('layouts.master')

@section('title','job-create')

@section('content')

{{-- job create form --}}

    <div class="container-fluid mt-3">

        <div class="col-md-6 m-auto">

            <form action="" method="POST">
                @csrf

                <h2 class="text-center mb-4 p-2 bg-info text-white rounded">Create Job</h2>

                @foreach ($errors->all() as $error)

                    <p class="alert alert-danger">{{$error}}</p>

                @endforeach

                @if (session('status'))

                <p class="alert alert-success">{{session('status')}}</p>

                 @endif

                <div class="form-group">
                    <label for="name">Job Name</label>
                    <input type="text" class="form-control" name="name" placeholder="job name">
                </div>


                <div class="form-group">
                    <label for="description">Job Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <label for="benefit">Benefit</label>
                    <textarea name="benifit" id="benefit" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <label for="">Highlight</label>
                    <input type="text" name="highlight" class="form-control" placeholder="highlight">
                </div>


                <div class="form-group">
                    <label for="">Salary</label>
                    <input type="number" name="salary" class="form-control" placeholder="salary">
                </div>


                <div class="form-group">
                    <label for="">Closed Date</label>
                    <input type="date" name="closed_date" class="form-control" placeholder="closed date">
                </div>


                <div class="form-group">
                    <label for="">Job Category</label>
                    <select name="job_category_id" class="form-control" id="">
                        <option value="">Select Job Category</option>
                        @foreach ($jobcategories as $jobcategory)
                        <option value="{{$jobcategory->id}}">{{$jobcategory->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="company">Company</label>
                    <select name="company_id" class="form-control" id="company">
                        <option value="">Select Company</option>
                        @foreach ($compaines as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                </select>
                </div>


                <div class="form-group">
                    <label for="">Limit Post</label>
                    <input type="number" name="limit_post" class="form-control" minlength="2">
                </div>


                <div class="form-group">
                    <label for="">Content-Email</label>
                    <input type="email" name="contact_email" class="form-control" placeholder="eg.xxxxx@gmail.com">
                </div>


                <div class="form-group">
                    <label for="">Content-Phone</label>
                    <input type="tel" name="contact_number" class="form-control" placeholder="eg.09-xxxxxxxx">
                </div>
                

                <input type="submit" class="btn btn-primary" value="Submit">
            
            </form>
        
        </div>
   
    </div>
    
@endsection