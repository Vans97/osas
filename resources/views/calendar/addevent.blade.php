{{-- <!DOCTYPE html>
<html lang="en">
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
    
<div class ="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #2e6da4; color:white;">
                    Add Event To Calendar
                </div>

                <div class="panel-body">

                    <h1>Task: Add Data</h1>
                    <form method="POST" action="{{action('EventController@store')}}">
                        {{csrf_field()}}
                        {{-- <input type="hidden" name="_method" value="PUT">  --}}

                        <label for="">Enter Name of Event</label>
                        <input type="text" class="form-control" name="title"  placeholder="Enter the name"/><br/><br/>

                        <label for="">Enter Color</label>
                        <input type="color" class="form-control" name="color" placeholder="Enter the color"/><br/><br/>

                        <label for="">Enter Start Date of Event</label>
                        <input type="datetime-local" class="form-control" name="start_date" placeholder="Enter the start date"/><br/><br/>

                        <label for="">Enter End Date of Event</label>
                        <input type="datetime-local" class="form-control" name="end_date" placeholder="Enter the end date"/><br/><br/>

                        <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data"/>

                        {{-- {!! Form::open(['action' => 'EventController@store', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {{Form::label('title','Title')}}
                            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                        </div>
            
                        <div class="form-group">
                            {{Form::label('color','Color')}}
                            {{Form::text('color','',['class'=>'form-control','placeholder'=>'Activity Place'])}}
                        </div>
            
                        <div class="form-group">
                            {{Form::label('start_date','Start Date')}}
                            {{Form::text('start_date','',['class'=>'form-control','placeholder'=>'Approval'])}}
                        </div>
            
                        <div class="form-group">
                            {{Form::label('end_date','End Date')}}
                            {{Form::text('end_date','',['class'=>'form-control','placeholder'=>'Remarks'])}}
                        </div>
            
                        
                        
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!} --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- 
</body>
</html> --}}