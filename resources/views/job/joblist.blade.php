@extends('layouts.master')

@section('title','Job-List')

@section('content')

{{-- job list form --}}

        <div class="container-fluid mt-3"> 

            <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">

                                <div class="form-control form-control-lg text-center btn btn-info p-2 text-white">Job Category</div>

                                @foreach ($jobcategories as $jobcategory)
                                
                        <a href="{{ url('/job/jobdetails/'.$jobcategory->id)}}">  <div class="form-control">{{ $jobcategory->name}}</div> </a> 
                                
                                @endforeach

                         </div>

                    </div>
            
                    <div class="col-md-8">
                        
                        @foreach ($jobs as $job)
                            <div class="border border-info rounded">

                                <div class="card-header bg-info"><h3> <a href="{{url('/job/jobdetails/'.$job->id)}}" class="text-white">  {{ $job->name }} </a> </h3></div>

                                <div class="card-body mb-4">
        
                                    <h5 class="card-title">Description</h5>
        
                                    <p class="card-text">{{ $job->description }}</p>
        
                                    <hr>
        
                                    <h5 class="card-title">Benefit</h5>
        
                                    <p class="card-text">{{ $job->benifit }}</p>
        
                                    <hr>
        
                                    <h5 class="card-title">Highlight</h5>
        
                                    <p class="card-text">{{ $job->highlight }}</p>
                                    
                                    <hr>

                                    <button class="btn btn-primary"> <a href="{{url('/job/jobdetails/'.$job->id)}}" class="text-white"> Details </a> </button>
        
                                </div>
                                
                            </div>

                        @endforeach

                    </div>
            
            </div>
            
        </div>

@endsection