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
    @extends('layouts.app1')

@section('content')

    <form action="{{action('EventController@update',$id)}}" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <div class="jumbotron" style="margin-top: 5%;">
                <h1> Update your Event </h1>
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label>Name of The Event</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Event" value="{{$events->title}}">
            </div>

            <div class="form-group">
                <label>Event Color</label>
                <input type="color" class="form-control" name="color" placeholder="Enter Color" value="{{$events->color}}">
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
    </div>
    </form>
           
    @endsection
{{-- </body> --}}
{{-- </html> --}}