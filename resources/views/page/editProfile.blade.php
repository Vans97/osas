@extends('layouts.app1')

@section('content')
{{-- @foreach($test = $tests) --}}
<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
     <h1>Update Profile</h1>
      
        {!! Form::open(['action' => ['PagesController@update',$profile->id], 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('studID','Student ID')}}
                {{Form::text('studID',$profile->studID,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name',$profile->name,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('program','Programme')}}
                {{Form::text('program',$profile->program,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('mobile','Mobile No')}}
                {{Form::text('mobile',$profile->mobile,['class'=>'form-control','placeholder'=>'Remarks'])}}
            </div>

            <div class="form-group">
                {{Form::label('email','Current E-mail')}}
                {{Form::text('email',$profile->email,['class'=>'form-control','placeholder'=>'Name'])}}
            </div>

            
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

    </div>
</div>
{{-- @endforeach --}}
@endsection

