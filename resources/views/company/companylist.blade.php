@extends('layouts.master')

@section('title','job-create')

@section('content')

{{-- company list form --}}

<div class="container mt-3">
    
    <h2 class="text-center "><b>Company List</b></h2>

    <table class="table table-striped">

        <thead>

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Township</th>
            <th>Modify</th>
        </tr>

        </thead>

        <tbody>

        @foreach ($compaines as $company)

            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->email}} </td>
                <td>{{$company->phone}} </td>
                <td>{{$company->township}} </td>
                <td><a href="{{ url('/edit/'.$company->id)}}" class="btn btn-primary">Edit</a> &nbsp;<a href="{{url('/delete/'.$company->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>

        @endforeach

        </tbody>

    </table>
    
    <a href="{{ url('/company/create') }}" class="btn btn-primary">Add Company</a>

</div>

@endsection 