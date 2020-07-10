@extends('layouts.admin')

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

        {!! Form::open(['action' => ['AdminController@update',$proposal->id], 'method'=>'POST']) !!}

        <div class="form-group">
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$proposal->title,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('actPlace','Activity Place')}}
                {{Form::text('actPlace',$proposal->actPlace,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('approvel','Approval')}}
                {{Form::text('approvel',$proposal->approvel,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('remark','Remarks')}}
                {{Form::text('remark',$proposal->remark,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name',$proposal->name,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-control">
                {{Form::label('status','Status')}} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{-- {{Form::text('status',$proposal->status,['class'=>'form-control','placeholder'=>'Status'])}} --}}
                {{Form::select('status',['Approved'=>'Approved','Rejected'=>'Rejected'])}}
            </div><br/>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}


            {{-- <form action="{{action('AdminController@update',$proposal->id)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="{{$proposal->title}}" readonly /><br/>

            <label for="">Activity Place</label>
            <input type="text" class="form-control" name="actPlace" value="{{$proposal->actPlace}}" readonly /><br/>

            <label for="">Approval</label>
            <input type="text" class="form-control" name="approvel" value="{{$proposal->approvel}}" readonly /><br/>

            <label for="">Remarks</label>
            <input type="text" class="form-control" name="remark" value="{{$proposal->remark}}" readonly/><br/>

            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$proposal->name}}" readonly/><br/>

            <label for="">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
            </select><br/>

            <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data"/>
        </form> --}}
    </div>
</div>
    </div>
</div>
@endsection

