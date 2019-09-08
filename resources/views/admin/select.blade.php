@extends('layouts.adminapp')

@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    {{--  @if (session('status'))
                        <div class="alert alert-success">
                           <p> {{ session('status') }}</p>
                        </div>
                    @endif  --}}
                    <center><h3>Car Rental Management System </h3></center>
                    <h4>Add Car Rental Details: </h4>




  <form action="/updateed" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
<input type="hidden" value="{{$upda->id}}" name="id">
                         <div class="row">
                           <div class="col-md-12">
                                <div class="form-group">
                                        <input type="text" name="carTitle" value="{{$upda->cartitle}}" class="form-control" required placeholder="Enter car title">
                                </div>
                        </div>
                     </div>
             
                        <div class="form-group">
                            <button type="submit" name="add" class="btn btn-primary btn-sm">Update</button>
                            <button type="reset"  class="btn btn-danger btn-sm">reset</button>

                        </div>
                    </form>  


                </div>
            </div>
        </div>
    </div>
</div>
{{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    function main(data){
        $(document).ready(function(){
            var select = $('#se').val();
            var result = $('#price').val();
            if(data=='1'){
                $("#price").val('80$');
            }
            else if(data=='3'){
                $("#price").val('250$');
            }
            else if(data=='5'){
                $("#price").val('280$');
            }
        })
    }
    </script>  --}}
@endsection
