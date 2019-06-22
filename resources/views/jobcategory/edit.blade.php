@extends('layouts.master')

@section('title','job-category')

@section('content')

<div class="container mt-3">
    
        <h2 class="text-center "><b>Jobcategory List</b></h2>
    
        <table class="table table-striped">
    
            <thead>
    
            <tr>
                <th>Name</th>
            </tr>
    
            </thead>
    
            <tbody>
    
                <tr>
                    <input type="text" class="form-control" value="{{$jobcategory->name}}">
                </tr>
    
            </tbody>
    
        </table>
        
        <a href="{{ url('/jobcategory') }}" class="btn btn-primary">Update Category</a>
    
    </div>
@endsection