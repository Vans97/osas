@extends('layouts.student')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 5%">
        <div class="col-md-8">
            <div class="card">
                

               

                    @if(count($proposals)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            
                            <th></th>
                        </tr>
                        @foreach($proposals as $proposal)
                        <tr>
                            <td> <h3><a href="/proposalPage/{{$proposal->id}}"> {{$proposal->title}}</a></h3>
                                    <small>Applied on {{$proposal->created_at}} by {{$proposal->user->name}}</small> 
                            </td>
                            
                            <th></th>
                        </tr>
                        @endforeach
                    </table>

                    @else

                    <p>You have no proposal</p>
                    @endif
                   
            
        </div>
        <div class="panel-body" style="margin-top: 2%">
            <a href="/proposalPage/create" class="btn btn-primary">Create Proposal</a>
          </div>
    </div>

   
</div>
@endsection
