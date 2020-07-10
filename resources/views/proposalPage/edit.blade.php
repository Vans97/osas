@extends('layouts.student')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">FORM OF VEHICLE AND PLACE USE</h3>
          </div>

        {!! Form::open(['action' => ['ProposalController@update',$tests->id], 'method'=>'POST']) !!}
        <div class="card-body">
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
                {{Form::text('status',$tests->status,['class'=>'form-control','placeholder'=>'Status', 'readonly'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>

        {!! Form::close() !!}
        </div>


    </div>
</form>
</div>
</div>
</div>
</div>

@endsection

