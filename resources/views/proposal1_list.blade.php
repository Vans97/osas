{{-- <table class="table">
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
    @foreach($proposals as $proposal)
    <tr>
        <td>{{$proposal->actPlace}}</td>
        <td>{{$proposal->approvel}}</td>
        <td>{{$proposal->remark}}</td>
        <td>{{$proposal->name}}</td>
        <td>{{$proposal->status}}</td>
    
        <td>
            
            <a href="{{ url('/edit/'.$proposal->id) }}" class= "btn btn-sm btn-warning">Edit</a>
            
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

 --}}
