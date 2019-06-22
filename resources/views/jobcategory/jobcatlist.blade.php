@extends('layouts.master')

@section('title','job-category')

@section('content')

<div class="container mt-3">
    
        <h2 class="text-center "><b>Jobcategory List</b></h2>
    
        <table class="table table-striped">
    
            <thead>
    
            <tr>
                <th>Name</th>
                <th>Modify</th>
            </tr>
    
            </thead>
    
            <tbody>
    
            @foreach ($jobcategories as $jobcategory)
    
                <tr>
                    <td>{{$jobcategory->name}}</td>
                    <td><a href="{{ url('/jobcategory/edit/'.$jobcategory->id)}}" class="btn btn-primary">Edit</a> &nbsp;<a href="{{url('/jobcategory/delete/'.$jobcategory->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
    
            @endforeach
    
            </tbody>
    
        </table>
        
        <a href="{{ url('/jobcategory/create') }}" class="btn btn-primary">Add Jobcategory</a>
    
    </div>
@endsection