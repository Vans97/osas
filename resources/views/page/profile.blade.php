@extends('layouts.app1')

@section('content')
<div class="container">
  <div class="profile" style="margin-top: 5%;">

            <table class="table table-bordered">
                <thead class="thead-dark">
                   <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    
                  </tr>
                </thead>
              
                <tbody>
                 
                  <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      
                  </tr>
                  
                </tbody> 
              
              </table>
              
  </div>
</div>
              
        
       
@endsection













