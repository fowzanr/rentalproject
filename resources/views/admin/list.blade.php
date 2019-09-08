@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <center><h4>  CAR RENTAL MANAGEMENT SYSTEM</h4></center>
                  @php
                  $list = \App\bookModel::paginate(3); 

                  @endphp

                  <table class="table table-bordered">
                      <tr>
                          <th>Customer name</th>
                          <th>Contact Number</th>
                          <th>Car Name</th>
                          <th>Rupees $</th>
                          <th>Book Days</th>
                          <th>Date & Time</th>

                      </tr>
                      @foreach ( $list  as $fetch )
                          <tr>
                              <td>{{ $fetch->fname}}</td>
                              <td>{{ $fetch->cnum }}</td>
                              <td>{{ $fetch->carname }}</td>
                              <td>{{ $fetch->rupees }}</td>
                              <td>{{ $fetch->BookDays }}</td>
                              <td>{{ $fetch->created_at }}</td>
                          </tr>
                      @endforeach
                  </table>
                  {{ $list->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
