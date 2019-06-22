@extends('layouts.master')

@section('title','job-category')

@section('content')

{{-- jobcategory create form --}}

<div class="container-fluid mt-5">

    <div class="col-md-6 m-auto">
        
        <form action="" method="POST">
            @csrf

            <h2 class="text-center mb-4 p-2 bg-info text-white rounded-lg">Create Job-Category</h2>

            @foreach ($errors->all() as $error)

                <p class="alert alert-danger">{{$error}}</p>

            @endforeach


            @if (session('status'))

                <p class="alert alert-success">{{session('status')}}</p>

            @endif


            <div class="form-group">

                <label for="name">Job Category</label>

                <input type="text" class="form-control" name="name" placeholder="job-category name">
                
                <input type="submit" class="btn btn-primary mt-3" value="Submit">

            </div>
        
        </form>
    
    </div>

</div>        
@endsection