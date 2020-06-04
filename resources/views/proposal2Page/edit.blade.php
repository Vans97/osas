{{-- @extends('layouts.app1')

@section('content')
@foreach($test = $tests)
<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
     <h1>Edit Proposal</h1>
      
        {!! Form::open(['action' => ['Proposal2Controller@update',$test->id], 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('date_approved','Date Approved')}}
                {{Form::text('date_approved',$test->date_approved,['class'=>'form-control','placeholder'=>'Date Approved'])}}
            </div>

            <div class="form-group">
                {{Form::label('act_level','Activity Level')}}
                {{Form::text('act_level',$test->act_level,['class'=>'form-control','placeholder'=>'Activity Place'])}}
            </div>

            <div class="form-group">
                {{Form::label('act_category','Activity Category')}}
                {{Form::text('act_category',$test->act_category,['class'=>'form-control','placeholder'=>'Approval'])}}
            </div>

            <div class="form-group">
                {{Form::label('organize','Organize')}}
                {{Form::text('organize',$test->organize,['class'=>'form-control','placeholder'=>'Remarks'])}}
            </div>

            <div class="form-group">
                {{Form::label('date','Date')}}
                {{Form::text('date',$test->date,['class'=>'form-control','placeholder'=>'Name'])}}
            </div>

            <div class="form-group">
                {{Form::label('no_participant','Number Of Participant')}}
                {{Form::text('no_participant',$test->no_participant,['class'=>'form-control','placeholder'=>'Status'])}}
            </div>

            <div class="form-group">
                {{Form::label('cost','Costt')}}
                {{Form::text('cost',$test->cost,['class'=>'form-control','placeholder'=>'Status'])}}
            </div>

            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

    </div>
</div>
@endforeach
@endsection
 --}}
