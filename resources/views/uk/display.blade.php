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
    @extends('layouts.uk')

@section('content')
    <div class="container">
        <div class="jumbroton">

            <table class="table table-striped table-bordered table-hover ">
                <thead class="thead-dark">
                    
                    <tr class="warning">
                        {{-- <th>ID</th> --}}
                        {{-- <th>Student Name</th> --}}
                        <th>Student Name</th>
                        <th>Event Name</th>
                        <th>Driver</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Send Email</th>
                    </tr>
                </thead>
                @foreach($events as $event)
                <tbody>
                    <div class="jumbroton">
                    <tr>
                        {{-- <td>{{ $event->id}}</td> --}}
                        {{-- <td>{{ $event->user->name}}</td> --}}
                        <td>{{ $event->name}}</td>
                        <td>{{ $event->title}}</td>
                        <td>{{ $event->driver}}</td>
                        <td>{{ $event->start_date}}</td>
                        <td>{{ $event->end_date}}</td>

                        <th>
                            {{-- <a href="{{action('EventController@edit',$event['id'])}}" class="btn btn-success"> --}}
                            {{-- <i class="glyphicon glyphicon-edit"></i>  --}}
                            {{-- Edit </a> --}}

                            <a href="{{action('UKController@edit',$event->event_id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>


                        </th>

                        <th>

                            <form method="POST" action="{{action('UKController@destroy', $event->id)}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>

                        </th>

                        <th>

                            {{-- <a href="{{ action('MailSend@mailsend', [$event->email]) }}" class="btn btn-success">Send Email</a> --}}
                            <a href="/send-mail/{{ $event->email }}/{{ $event->driver }}/{{ $event->start_date }}" class="btn btn-success"><span class="fas fa-envelope"></span></a>

                        </th>
                    </tr>
                </tbody>
                @endforeach
            </table>


        </div>
    </div>
    @endsection
{{-- </body> --}}
{{-- </html> --}}
