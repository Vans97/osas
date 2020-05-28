@extends('layouts.app1')

@section('content')

    <a href="/home" class="btn btn-secondary btn-sm">Back</a>
    <h1>{{$proposal->title}}<h1>

        @if($layout == 'show')
       
        
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
                              <td>{{$proposal->actPlace}}</td>
                              <td>{{$proposal->approvel}}</td>
                              <td>{{$proposal->remark}}</td>
                              <td>{{$proposal->name}}</td>
                              <td>{{$proposal->status}}</td>
                              
                              
                          
                              <td>
                                  @if(!Auth::guest())
                                    @if(Auth::user()->id == $proposal->user_id)
                                  <a href="/proposalPage/{{$proposal->id}}/edit" class= "btn btn-sm btn-warning">Edit</a>
                                  {!!Form::open(['action' => ['ProposalController@destroy', $proposal->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!}
                                  @endif
                                  @endif
                              </td>
                          </tr>
                          
                        </tbody>
                      </table>





                    

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
                          </tr>
                        </thead>
                      
                        <tbody>
                         
                          <tr>
                              <td>{{$proposal2->date_approve}}</td>
                              <td>{{$proposal2->act_level}}</td>
                              <td>{{$proposal2->act_category}}</td>
                              <td>{{$proposal2->organize}}</td>
                              <td>{{$proposal2->date}}</td>
                              <td>{{$proposal2->no_participant}}</td>
                              <td>{{$proposal2->cost}}</td>
                          
                              {{-- <td>
                                  @if(!Auth::guest())
                                    @if(Auth::user()->id == $proposal->user_id)
                                  <a href="/proposalPage/{{$proposal->id}}/edit" class= "btn btn-sm btn-warning">Edit</a>
                                  {!!Form::open(['action' => ['ProposalController@destroy', $proposal->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!}
                                  @endif
                                  @endif
                              </td> --}}
                          </tr>
                          
                        </tbody>
                      </table>
                      
        
            @else
            <p>takde</p>
            @endif
        

@endsection