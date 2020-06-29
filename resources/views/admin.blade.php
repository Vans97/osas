@extends('layouts.app')

@section('content')
<h1><center>All Proposals</center><h1> 
<div class="container">
    <div class="row justify-content-center" style="margin-top: 5%">
        <div class="col-md-8">
            <div class="card">
                
    @if(count($proposals)>0)
        @foreach($proposals as $proposal)
            <div class="well">
                <div class="card w-90 ">
                    <div class="card-body">
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/adminUpdate/{{$proposal->id}}"> {{$proposal->title}}</a></h3>
                            <h6>Applied on {{$proposal->created_at}} by {{$proposal->user->name}}</h6>
                            </div>
                    </div>
                  </div>
               
            </div>

            

        @endforeach
    @else
        <p>No Proposal Found</p>
    @endif
            </div>
        </div>
    </div>
</div>

@endsection
