@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('edit'))
                        <div class="alert alert-success">
                            {{ session('edit') }}
                        </div>
                    @endif          
                @php
                    $contacts = \App\Insertmode::paginate(3); 
                @endphp
             <center>   <h4>Car Rental Management System</h4></center>

                <table class="table table-bordered">
                <tr>
                <th>ID</th>
                <th>CAR IMAGE</th>
                <th>CAR TITLE</th>
                <th>Rent Days</th>
                <th>Rupees</th>
                <th>Action</th>
                </tr>
                @foreach ($contacts as $select )
                    <tr>
                    <td>{{$select->id}}</td>
                    <td><img src="{{$select->imagee}}" width="200" heigh="100"></td>
                    <td>{{$select->cartitle}}</th>
                    <th>{{$select->rentdays}}</th>
                    <th>{{$select->rupees}}</th>
                    <td><a href="/book/{{$select->id}}" class="btn btn-primary btn-sm">Booking Now</a></td>
            
                    </tr>
                @endforeach
                
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
