@extends('layouts.student')

@section('content')
<div class="container">
  <div class="profile" style="margin-top: 5%">

            <table class="table table-bordered" style="width: 70%; margin-left: 11%">
                <thead class="thead-dark">
                   {{-- <tr>
                    
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Programme</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">email</th>
                    

                    
                  </tr>
                </thead>
              
                <tbody>
                 
                  <tr>
                      <td>{{$user->studID}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->program}}</td>
                      <td>{{$user->mobile}}</td>
                      <td>{{$user->email}}</td>
                      
                  </tr> --}}
                  <tr >
                    <th scope="col">Student ID</th>
                    <td>{{$user->studID}}</td>
                  </tr>

                  <tr>
                    <th scope="col">Name</th>
                    <td>{{$user->name}}</td>
                  </tr>

                  <tr>
                    <th scope="col">Programme</th>
                    <td>{{$user->program}}</td>
                  </tr>

                  <tr>
                    <th scope="col">Mobile No</th>
                    <td>{{$user->mobile}}</td>
                  </tr>

                  <tr>
                    <th scope="col">Email</th>
                    <td>{{$user->email}}</td>
                  </tr>

                  
                </tbody> 
              
              </table>
              <a href="/page/{{$user->id}}/editProfile" class= "btn btn-small bg-gradient-primary" style="margin-left: 11%"><i class="fa fa-edit"></i></a>
  </div>
</div>
              
        
       
@endsection













