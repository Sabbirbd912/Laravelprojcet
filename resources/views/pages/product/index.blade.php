@extends("layouts.master")

@section("page")

<?php
  use App\Libraries\Core\File;
?>

<div class="container">
  <?php
   //echo  File::info();
  ?>
<a class="btn btn-info" href="{{url('products/create')}}">New Product</a>
<table class="table">
 <tr>
   <th>Id</th> 
   <th>Photo</th>
   <th>Name</th> 
   <th>Price</th> 
   <th>Action</th> 
 <tr>
@forelse ($products as $product)
<tr>
    <td>{{ $product->id }}</td>
    <td><img src='{{url("/img/$product->photo")}}' width="100" /> </td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->offer_price }}</td>
    <td>
      <div class="btn-group">
      <a class="btn btn-primary" href='{{url("products/$product->id/edit")}}'>Edit</a>
      <a class="btn btn-success" href='{{url("products/$product->id")}}'>View</a>
      <a class="btn btn-warning" href='{{url("products/$product->id/confirm")}}'>Delete</a>
    </div>
  </td>
</tr>
@empty
    <tr><td>No Product</td></tr>
@endforelse
</table>
</div>

@endsection
