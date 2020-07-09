@extends('layouts.student')

@section('content')
{{-- @foreach($test = $tests) --}}
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Profile</h3>
          </div>
      
        {!! Form::open(['action' => ['PagesController@update',$profile->id], 'method'=>'POST']) !!}
        <div class="card-body">
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
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>
</div>
{{-- @endforeach --}}
@endsection

