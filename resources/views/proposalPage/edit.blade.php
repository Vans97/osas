@extends('layouts.app1')

@section('content')
{{-- @foreach($test = $tests) --}}
<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
     <h1>Edit Proposal</h1>
      
        {!! Form::open(['action' => ['ProposalController@update',$tests->id], 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$tests->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('actPlace','Activity Place')}}
                {{Form::text('actPlace',$tests->actPlace,['class'=>'form-control','placeholder'=>'Activity Place'])}}
            </div>

            <div class="form-group">
                {{Form::label('approvel','Approval')}}
                {{Form::text('approvel',$tests->approvel,['class'=>'form-control','placeholder'=>'Approval'])}}
            </div>

            <div class="form-group">
                {{Form::label('remark','Remarks')}}
                {{Form::text('remark',$tests->remark,['class'=>'form-control','placeholder'=>'Remarks'])}}
            </div>

            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name',$tests->name,['class'=>'form-control','placeholder'=>'Name'])}}
            </div>

            <div class="form-group">
                {{Form::label('status','Status')}}
                {{Form::text('status',$tests->status,['class'=>'form-control','placeholder'=>'Status'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

    </div>
</div>
{{-- @endforeach --}}
@endsection

