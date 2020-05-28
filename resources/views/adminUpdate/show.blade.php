@extends('layouts.app')

@section('content')

    <a href="/proposalPage" class="btn btn-default">Back</a>
    <h1>{{$proposal->title}}<h1>

        @if($layout == 'show')
        <div class="container-fluid">
                <div class = "row">
                <section class="col">
                    <table class="table">
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
                                  {{-- @if(!Auth::guest())
                                    @if(Auth::user()->id == $proposal->user_id) --}}
                                  <a href="/adminUpdate/{{$proposal->id}}/edit" class= "btn btn-sm btn-warning">Edit</a>
                                  {{-- {!!Form::open(['action' => ['ProposalController@destroy', $proposal->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!}
                                  @endif
                                  @endif --}}
                              </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      
                      
                      
                </section>
                <section class="col"></section>
                </div>
            </div>
            @else
            <p>takde</p>
            @endif
        
           


@endsection