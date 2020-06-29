@extends('layouts.app1')

@section('content')

   <a href="/home" class="btn btn-secondary btn-sm">Back</a>
  <div class="container">
    <div class="show" style="margin-top: 5%;">
   @foreach($proposal1 as $proposals1)
    <h1>{{$proposals1->title}}</h1>

        
       
                    <small> PENGESAHAN PENGGUNAAN TEMPAT DAN KENDERAAN</small>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Activity Place</th>
                            <th scope="col">Approval</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            
                            <th scope="col">Operation</th>

                          </tr>
                        </thead>
                      
                        <tbody>
                         
                          <tr>
                              <td>{{$proposals1->actPlace}}</td>
                              <td>{{$proposals1->approvel}}</td>
                              <td>{{$proposals1->remark}}</td>
                              <td>{{$proposals1->name}}</td>
                              <td>{{$proposals1->status}}</td>
                              
                              
                          
                              <td>
                                  @if(!Auth::guest())
                                    @if(Auth::user()->id == $proposals1->user_id)
                                  <a href="/proposalPage/{{$proposals1->id}}/edit" class= "btn btn-sm btn-warning">Edit</a>
                                  {!!Form::open(['action' => ['ProposalController@destroy', $proposals1->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!}
                                  @endif
                                  @endif
                              </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      @endforeach
    </div>
  </div>

<div class="container">
<div class="profile" style="margin-top: 5%;">

@foreach($proposal2 as $proposals2)


                    
                      <small>RINGKASAN PERMOHONAN AKTIVITI PELAJAR</small>
                      <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Date Approved</th>
                            <th scope="col">Activity Level</th>
                            <th scope="col">Activity Category</th>
                            <th scope="col">organize</th>
                            <th scope="col">date</th>
                            <th scope="col">Number of Participant</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Operation</th>
                          </tr>
                        </thead>
                      
                        <tbody>
                         
                          <tr>
                              <td>{{$proposals2->date_approved}}</td>
                              <td>{{$proposals2->act_level}}</td>
                              <td>{{$proposals2->act_category}}</td>
                              <td>{{$proposals2->organize}}</td>
                              <td>{{$proposals2->date}}</td>
                              <td>{{$proposals2->no_participant}}</td>
                              <td>{{$proposals2->cost}}</td>
                          
                              <td>
                                  @if(!Auth::guest())
                                    @if(Auth::user()->id == $proposals2->user_id)
                                  <a href="/proposal2Page/{{$proposals2->id}}/edit" class= "btn btn-sm btn-warning">Edit</a>
                                  {!!Form::open(['action' => ['Proposal2Controller@destroy', $proposals2->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!}
                                  @endif
                                  @endif
                              </td>
                          </tr>
                          
                        </tbody>
                      </table> 
                       
        
           
        @endforeach
</div>
</div>

@endsection