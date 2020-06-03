@extends('layouts.app1')

@section('content')

   <a href="/home" class="btn btn-secondary btn-sm">Back</a>
   @foreach($test as $tests)
    <h1>{{$tests->title}}<h1>

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
                              <td>{{$tests->actPlace}}</td>
                              <td>{{$tests->approvel}}</td>
                              <td>{{$tests->remark}}</td>
                              <td>{{$tests->name}}</td>
                              <td>{{$tests->status}}</td>
                              
                              
                          
                              <td>
                                  @if(!Auth::guest())
                                    @if(Auth::user()->id == $tests->user_id)
                                  <a href="/proposalPage/{{$tests->id}}/edit" class= "btn btn-sm btn-warning">Edit</a>
                                  {!!Form::open(['action' => ['ProposalController@destroy', $tests->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
                            <th scope="col">Operation</th>
                          </tr>
                        </thead>
                      
                        <tbody>
                         
                          <tr>
                              <td>{{$tests->date_approved}}</td>
                              <td>{{$tests->act_level}}</td>
                              <td>{{$tests->act_category}}</td>
                              <td>{{$tests->organize}}</td>
                              <td>{{$tests->date}}</td>
                              <td>{{$tests->no_participant}}</td>
                              <td>{{$tests->cost}}</td>
                          
                              <td>
                                  @if(!Auth::guest())
                                    @if(Auth::user()->id == $tests->user_id)
                                  <a href="/proposal2Page/{{$tests->id}}/edit" class= "btn btn-sm btn-warning">Edit</a>
                                  {!!Form::open(['action' => ['Proposal2Controller@destroy', $tests->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!}
                                  @endif
                                  @endif
                              </td>
                          </tr>
                          
                        </tbody>
                      </table> 
                       
        
            @else
            <p>takde</p>
            @endif
        @endforeach

@endsection