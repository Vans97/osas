{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body> --}}
    @extends('layouts.student')

@section('content')
    <div class="container" style="margin-top: 5%">
        
            <table class="table table-striped table-bordered table-hover ">
                <thead class="thead-dark">
                    
                    <tr class="warning">
                        {{-- <th>ID</th> --}}
                        <th>Student Name</th>
                        <th>Event Name</th>
                        
                        <th>Driver</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach($events as $event)
                <tbody>
                    <div class="jumbroton">
                    <tr>
                        {{-- <td>{{ $event->id}}</td> --}}
                        <td>{{ $event->user->name}}</td>
                        <td>{{ $event->title}}</td>
                       
                        <td>{{ $event->driver}}</td>
                        <td>{{ $event->start_date}}</td>
                        <td>{{ $event->end_date}}</td>

                        <th>
                            {{-- <a href="{{action('EventController@edit',$event['id'])}}" class="btn btn-success"> --}}
                            {{-- <i class="glyphicon glyphicon-edit"></i>  --}}
                            {{-- Edit </a> --}}
                            @if(!Auth::guest())
                             @if(Auth::user()->id == $event->user_id)
                             <a href="{{action('EventController@edit',$event['id'])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            @endif
                            @endif

                        </th>

                        <th>
                            @if(!Auth::guest())
                            @if(Auth::user()->id == $event->user_id)
                            <form method="POST" action="{{action('EventController@destroy', $event['id'])}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button type="submit" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-delete"><i class="fa fa-trash"></i></i>
                                </button>
                            </form>
                            @endif
                            @endif
                        </th>
                    </tr>
                    </div>
                </tbody>
                @endforeach
            </table>
        


       
    </div>
    @endsection
{{-- </body> --}}
{{-- </html> --}}