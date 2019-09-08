@extends('layouts.adminapp')

@section('content')
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
                    @if(session()->has('success'))
                    <p class="alert alert-success">{{session()->get('success')}}</p>
                    @endif
                     @if(session()->has('edit'))
                    <p class="alert alert-success">{{session()->get('success')}}</p>
                    @endif
                    <hr>
                    <h4>Add Car Rental Details: </h4>
                    <form action="/add" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                            <input type="text" name="fname" class="form-control" required placeholder="Enter first name">
                                    </div>                
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                            <input type="text" name="lname" class="form-control" required placeholder="Enter last name">
                                    </div>                
                            </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                                <div class="form-group">
                                        <input type="file" name="file" id="imageInput" class="form-control" required>
                                    </div>
                        </div>
                         <div class="col-md-6">
                                <div class="form-group">
                                        <input type="text" name="carTitle" class="form-control" required placeholder="Enter car title">
                                </div>
                        </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                                <div class="form-group">
                                        <select name="se" onchange="main(this.value)" id="se" class="form-control  dropdown-toggle dropdown-toggle-split">
                                            <option>Select any one</option>    
                                            <option value="1">One day</option>
                                                <option value="3">Three day</option>
                                                <option value="5">Five day</option>
                                        </select>
                                    </div>
                        </div>
                         <div class="col-md-6">
                                <div class="form-group">
                                        <input type="text" id="price" name="price" class="form-control" placeholder="$">
                                </div>
                        </div>
                     </div>

                        <div class="form-group">
                            <button type="submit" name="add" class="btn btn-primary btn-sm">Add</button>
                            <button type="reset"  class="btn btn-danger btn-sm">reset</button>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    </script>
@endsection
