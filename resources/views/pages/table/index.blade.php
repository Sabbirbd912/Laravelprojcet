@extends("layouts.master")

@section("page")

<?php
  use App\Libraries\Core\File;
?>

<div class="container">
    <?php
        //echo  File::info();
     ?>

<a class="btn btn-info" href="{{url('tables/create')}}">New Table</a>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Status</th>
        <th>Photo</th>
        <th>Seats</th>
    </tr>
    @forelse ($tables as $table)
        <tr>
            <td>{{$table->id}}</td>
            <td>{{$table->name}}</td>
            <td>{{$table->status}}</td>
            <td><img src='{{url("/img/$table->photo")}}' width="100" /> </td>
            <td>{{$table->seats}}</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary" href='{{url("tables/$table->id/edit")}}'>Edit</a>
                    <a class="btn btn-success" href='{{url("tables/$table->id")}}'>View</a>
                    <a class="btn btn-warning" href='{{url("tables/$table->id/confirm")}}'>Delete</a>
                </div>
            </td>
        </tr>
        
    @empty
        <tr><td>No Product</td></tr>
    @endforelse
</div>

@endsection