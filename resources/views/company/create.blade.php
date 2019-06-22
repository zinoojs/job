@extends('layouts.master')

@section('title','job-create')

@section('content')

{{-- create-company --}}

    <div class="container-fluid mt-3">

        <div class="col-md-6 m-auto">

            <form action="" method="POST">

                @csrf


                <h2 class="text-center mb-4 p-2 bg-info text-white rounded-lg">Create Company</h2>
                

                @foreach ($errors->all() as $error)

                    <p class="alert alert-danger">{{$error}}</p>

                @endforeach

                @if (session('status'))

                    <p class="alert alert-success">{{session('status')}}</p>

                @endif

                <div class="form-group">

                    <label for="name">Company Name</label>

                    <input type="text" class="form-control" name="name" placeholder="Company name">
                
                </div>

                <div class="form-group">

                    <label for="industry">Industry</label>

                    <input type="text" name="industry" id="industry" class="form-control" placeholder="industry">
                </div>

                <div class="form-group">

                    <label for="email">Email Address</label>

                    <input name="email" id="email" class="form-control" placeholder="email address">
                
                </div>

                <div class="form-group">

                    <label for="phone">Phone Number</label>

                    <input name="phone" id="phone" class="form-control" placeholder="phone number">
                
                </div>

                <div class="form-group">

                    <label for="state">State</label>

                    <input name="state" id="state" class="form-control" placeholder="state">
                
                </div>

                <div class="form-group">

                    <label for="township">Township</label>

                    <input name="township" id="township" class="form-control" placeholder="township">
                
                </div>
                
                <input type="submit" class="btn btn-primary" value="Submit">
                
            </form>
        
        </div>
    
    </div>

@endsection