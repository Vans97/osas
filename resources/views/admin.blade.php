@extends('layouts.app')

@section('content')
<h1>Post<h1> &nbsp;
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
@endsection
