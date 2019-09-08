@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     @if (session('edit'))
                        <div class="alert alert-success">
                            {{ session('edit') }}
                        </div>
                    @endif

                    <center><h4>  CAR RENTAL MANAGEMENT SYSTEM</h4></center>
<hr>
                    <table class="table table-bordered">
                    <tr>
                    <th>ID</th>
                    <th>FIRST NAME</th>                    
                    <th>LAST NAME</th>
                    <th>Car Image</th>
                    <th>Car Title</th>
                    <th>Rent Days</th>
                    <th>Price</th>
                    <th>Action</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                

                @php
                    $contacts = \App\Insertmode::paginate(3); 
                @endphp

                    @foreach ( $contacts as $result )
                    <tr>
                    <td>{{$result->id}}</td>
                    <td>{{$result->fname}}</td>
                    <td>{{$result->lname}}</td>
                    <td><img src="{{$result->imagee}}" width="200" heigh="100"></td>
                    <td>{{$result->cartitle}}</td>
                    <td>{{$result->rentdays}}</td>
                    <td>{{$result->rupees}}</td>
                     <td><a href="{{url('admin/home')}}" class="btn btn-primary btn-sm">Add Record</a></td>
                    <td><a href="/update/{{$result->id}}" class="btn btn-primary btn-sm">Update</a></td>
                   <td><a href="/delete/{{$result->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                    
                    </tr>
    
                    @endforeach                   
                    </table>
                    
                    {{$contacts->render()}} 
                </div>
        </div>
    </div>
</div>
@endsection
