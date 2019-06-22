@extends('layouts.master')

@section('title','job-create')

@section('content')

{{-- company list form --}}

<div class="container mt-3">
    
    <h2 class="text-center "><b>Applicant List</b></h2>

    <table class="table table-striped">

        <thead>

        <tr>
            <th>Name</th>
            <th>Education</th>
            <th>Jobs</th>
            <th>Modify</th>
        </tr>

        </thead>

        <tbody>

        @foreach ($applicants as $applicant)

            <tr>
                <td>{{$applicant->name}}</td>
                <td>{{$applicant->education}} </td>
                <td>{{$applicant->job->name}} </td>
                <td><a href=" {{url('/applicant/applicantprofile/'.$applicant->id)}} " class="btn btn-info">more details</a> </td>
            </tr>

        @endforeach

        </tbody>

    </table>
    
    <a href="{{ url('/company/create') }}" class="btn btn-primary">Add Company</a>

</div>

@endsection 