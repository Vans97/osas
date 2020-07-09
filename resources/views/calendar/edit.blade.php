<!DOCTYPE html>
{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body> --}}
    @extends('layouts.student')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Event</h3>
          </div>

    <form action="{{action('EventController@update',$id)}}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
                <h1> Update your Event </h1>
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label>Name of The Event</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Event" value="{{$events->title}}">
            </div>

            <div class="form-group">
                <label hidden>Event Color</label>
                <input type="color" hidden class="form-control" name="color" value="#FF0000" readonly/>
            </div>

            <div class="form-group">
                <label>Name of The Driver</label>
                <input type="text" class="form-control" name="driver"  value="{{$events->driver}}" readonly>
            </div>

            <div class="form-group">
                <label>Start Date of Event</label>
                <input type="datetime-local" class="form-control" name="start_date" placeholder="Enter Start Date" value="{{$events->start_date}}">
             </div>

            <div class="form-group">
                <label>End Date of Event</label>
                <input type="datetime-local" class="form-control" name="end_date" placeholder="Enter End Date" value="{{$events->end_date}}">
            </div>

            {{ method_field('PUT')}}
            <button type="submit" name="submit" class="btn btn-success">Update Event</button>

        </div>
    
    </form>
      </div>
    </div>
</div>
</div>
           
    @endsection
{{-- </body> --}}
{{-- </html> --}}