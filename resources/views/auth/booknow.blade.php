@extends('layouts.app')

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
                    <h4>Add Your Details: </h4>




  <form action="/booknoww" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Full name</label>
<input type="text" name="name" class="form-control" required placeholder="Full name">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>Contact number</label>
<input type="text" name="phn" class="form-control" required placeholder="Phone Number">

</div>
</div>
</div>                         <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                <label>Car Name</label>
                                        <input type="text" name="carTitle" value="{{$upda->cartitle}}" class="form-control" required placeholder="Enter car title">
                                </div>
                              </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label>Rent $ : </label>
                                        <input type="text" name="rupees" value="{{$upda->rupees}}" class="form-control" required placeholder="Enter car title">
                                </div>
                                </div>
                     </div>
             
                               <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                <label>Car Rent Book Days: </label>
                                        <input type="text" name="rent" value="{{$upda->rentdays}}" class="form-control" required placeholder="Enter car title">
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
