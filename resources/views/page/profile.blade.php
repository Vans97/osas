@extends('layouts.app1')

@section('content')
<div class="container">
  <div class="profile" style="margin-top: 5%;">

            <table class="table table-bordered">
                <thead class="thead-dark">
                   <tr>
                    
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
                      
                  </tr>
                  
                </tbody> 
              
              </table>
              <a href="/page/{{$user->id}}/editProfile" class= "btn btn-sm btn-warning">Edit Profile</a>
  </div>
</div>
              
        
       
@endsection













