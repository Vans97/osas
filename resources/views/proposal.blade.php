{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  
  </head>
  <body>
    @extends('layouts.app')

      @section('content')
    @if($layout == 'index')
        <div class="container-fluid">
            <div class = "row">
            <section class="col">
               @include("proposal1_list")
            </section>
            <section class="col"></section>
            </div>
        </div>

    @elseif($layout == 'create')
        <div class="container-fluid">
                <div class = "row">
                <section class="col">
                  @include("proposal1_list")
                </section>
                <section class="col">

                <form action="{{url('/store')}}" method="POST">
                     <input type="hidden" name="__method" value="PUT">
                      {{ csrf_field() }}
                      
                    <div class="form-group">
                      <label for="actPlace">Activity Place</label>
                      <input name="actPlace" type="text" class="form-control" id="actPlace" >
                    </div>

                    <div class="form-group">
                      <label for="approvel">Approval</label>
                      <input name="approvel" type="text" class="form-control" id="approvel" >
                    </div>

                    <div class="form-group">
                      <label for="remark">Remarks</label>
                      <input name="remark" type="text" class="form-control" id="remark" >
                    </div>

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input name="name" type="text" class="form-control" id="name" >
                    </div>

                    <div class="form-group">
                      <label for="status">Status</label>
                      <input name="status" type="text" class="form-control" id="status" >
                    </div>

                   
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset"  class="btn btn-value">Reset</button>
                </form>

                </section>
                </div>
            </div>

    @elseif($layout == 'show')
        <div class="container-fluid">
                <div class = "row">
                <section class="col">
                  @include("proposal1_list")
                </section>
                <section class="col"></section>
                </div>
            </div>

    @elseif($layout == 'edit')
      <div class="container-fluid">
              <div class = "row">
              <section class="col">
                @include("proposal1_list")
              </section>
              <section class="col">

              <form action="{{url('/update/'.$proposal->id)}}" method="POST">
                     <input type="hidden" name="__method" value="PUT">
                      {{ csrf_field() }}
                      
                    <div class="form-group">
                      <label for="actPlace">Activity Place</label>
                      <input value="{{$proposal->actPlace}}" name="actPlace" type="text" class="form-control" id="actPlace" >
                    </div>

                    <div class="form-group">
                      <label for="approvel">Approval</label>
                      <input value="{{$proposal->approvel}}" name="approvel" type="text" class="form-control" id="approvel" >
                    </div>

                    <div class="form-group">
                      <label for="remark">Remarks</label>
                      <input value="{{$proposal->remark}}" name="remark" type="text" class="form-control" id="remark" >
                    </div>

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input value="{{$proposal->name}}" name="name" type="text" class="form-control" id="name" >
                    </div>

                    <div class="form-group">
                      <label for="status">Status</label>
                      <input value="{{$proposal->status}}" name="status" type="text" class="form-control" id="status" >
                    </div>

                   
                    <button type="submit" class="btn btn-info">Save</button>
                    <button type="reset"  class="btn btn-value">Reset</button>
                </form>

                </section>

              </section>
              </div>
          </div>

    @endif
@endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html> --}}