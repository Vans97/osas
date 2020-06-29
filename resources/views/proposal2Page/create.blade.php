@extends('layouts.app1')

@section('content')

<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
    <h1>Create Proposal 2</h1>
      
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

        <form method="POST" action="{{action('Proposal2Controller@store')}}">
            {{csrf_field()}}
            {{-- <input type="hidden" name="_method" value="PUT">  --}}

            <label for="">Date Approved</label>
            <input type="text" class="form-control" name="date_approved"  placeholder="Enter the title"/><br/>

            <label for="">Activity Level</label>
            {{-- <input type="text" class="form-control" name="act_level" placeholder="Enter activity place"/><br/><br/> --}}

            <select name="act_level" id="act_level" class="form-control">
                <option value="University">University</option>
                <option value="Campus">Campus</option>
                <option value="Faculty">Faculty</option>
                <option value="College">College</option>
                <option value="Club">Club</option>
            </select><br/>

            <label for="">Activity category</label>
            {{-- <input type="text" class="form-control" name="act_category" placeholder="Enter the approval"/><br/><br/> --}}

            <select name="act_category" id="act_category" class="form-control">
                <option value="Academic">Academic</option>
                <option value="Community Service">Community Service</option>
                <option value="Creative & Innovation">Creative & Innovation</option>
                <option value="Sport & Recreation">Sport & Recreation</option>
                <option value="Spirituality">Spirituality</option>
                <option value="Culture & Heritage">Culture & Heritage</option>
                <option value="Entrepreneurship">Entrepreneurship</option>
            </select><br/>

            <label for="">Organize</label>
            <input type="text" class="form-control" name="organize" placeholder="Enter the remarks"/><br/>

            <label for="">Date</label>
            <input type="date" class="form-control" name="date" placeholder="Enter the name"/><br/>

            <label for="">Number of Participant</label>
            <input type="text" class="form-control" name="no_participant" placeholder="Enter the name"/><br/>

            <label for="">Cost</label>
            <input type="double" class="form-control" name="cost" placeholder="Enter the name"/><br/>

            <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
        </form>
    </div>
</div>

@endsection

