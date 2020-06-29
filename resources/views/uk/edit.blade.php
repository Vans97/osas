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

    <form action="{{action('UKController@update',$id)}}" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <div class="jumbotron" style="margin-top: 5%;">
                <h1> Update your Event </h1>
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label>Name of The Event</label>
                <input type="text" class="form-control" name="title" value="{{$events->title}}" readonly>
            </div>

            <div class="form-group">
                <label hidden>Event Color</label>
                <input  type="color" hidden class="form-control" name="color" value="#008000" readonly>
            </div>

            <div class="form-group">
                <label>Name of The Driver</label>
                {{-- <input type="text" class="form-control" name="driver" value="{{$events->driver}}" > --}}
                <select name="driver" id="driver" class="form-control">
                    <option value="Ali">Ali Kasim</option>
                    <option value="Abu">Abu</option>
                    <option value="Abuja">Abuja</option>
                </select>
            </div>

            <div class="form-group">
                <label>Start Date of Event</label>
                <input  class="form-control" name="start_date"  value="{{$events->start_date}}" readonly>
             </div>

            <div class="form-group">
                <label>End Date of Event</label>
                <input  class="form-control" name="end_date"  value="{{$events->end_date}}" readonly>
            </div>

            {{ method_field('PUT')}}
            <button type="submit" name="submit" class="btn btn-success">Approved</button>

        </div>
    </div>
    </form>
           
    @endsection
{{-- </body> --}}
{{-- </html> --}}