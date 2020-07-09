@extends('layouts.student')

@section('content')

{{-- <div class="container"> --}}
    {{-- <div class="jumbotron" style="margin-top: 5%;"> --}}
    {{-- <h1>BORANG PENGESAHAN PENGGUNAAN TEMPAT DAN KENDERAAN</h1> --}}
    {{-- <h1>FORM OF VEHICLE AND PLACE USE</h1> --}}
      
        {{-- {!! Form::open(['action' => 'ProposalController@store', 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('actPlace','Activity Place')}}
                {{Form::text('actPlace','',['class'=>'form-control','placeholder'=>'Activity Place'])}}
            </div>

            <div class="form-group">
                {{Form::label('approvel','Approval')}}
                {{Form::text('approvel','',['class'=>'form-control','placeholder'=>'Approval'])}}
            </div>

            <div class="form-group">
                {{Form::label('remark','Remarks')}}
                {{Form::text('remark','',['class'=>'form-control','placeholder'=>'Remarks'])}}
            </div>

            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
            </div>

            <div class="form-group">
                {{Form::label('status','Status')}}
                {{-- {{Form::text('status','',['class'=>'form-control','placeholder'=>'Pending', 'disabled' => 'disabled'])}} --}}
                {{-- {{Form::text('status','',['class'=>'form-control','placeholder'=>'Pending', 'value'=>'pending'])}}

            </div>
            
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!} --}} 

        {{-- <form method="POST" action="{{action('ProposalController@store')}}"> --}}
            {{-- {{csrf_field()}} --}}
            {{-- <input type="hidden" name="_method" value="PUT">  --}}

            {{-- <label for="">Title</label>
            <input type="text" class="form-control" name="title"  placeholder="Enter the title"/><br/><br/>

            <label for="">Activity Place</label>
            <input type="text" class="form-control" name="actPlace" placeholder="Enter activity place"/><br/><br/>

            <label for="">Approval</label>
            <input type="text" class="form-control" name="approvel" placeholder="Enter the approval"/><br/><br/>

            <label for="">Remarks</label>
            <input type="text" class="form-control" name="remark" placeholder="Enter the remarks"/><br/><br/>

            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter the name"/><br/><br/>

            <label for="">Status</label>
            <input type="text" class="form-control" name="status" value="pending" readonly/><br/><br/>

            <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data"/>
        </form>
    </div>
</div> --}}

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">FORM OF VEHICLE AND PLACE USE</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('ProposalController@store')}}">
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title"  placeholder="Enter the title"/>
              </div>
              
              <div class="form-group">
                <label for="">Activity Place</label>
                <input type="text" class="form-control" name="actPlace" placeholder="Enter activity place"/>
              </div>

              <div class="form-group">
                <label for="">Approval</label>
            <input type="text" class="form-control" name="approvel" placeholder="Enter the approval"/>
              </div>

              <div class="form-group">
                <label for="">Remarks</label>
                <input type="text" class="form-control" name="remark" placeholder="Enter the remarks"/>
              </div>

              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter the name"/>
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control" name="status" value="pending" readonly/>
              </div>

              <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data"/>

            </div>
          </form>
        </div>
      </div>
    </div>
</div>


            

@endsection

