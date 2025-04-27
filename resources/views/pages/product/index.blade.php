@extends("layouts.master")

  @section("page")

    <?php
      use App\Libraries\Core\File;
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
      <th>Action</th> 
    <tr>
    @forelse ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td><img src='{{url("/img/$product->photo")}}' width="100" /> </td>
        <td>{{ $product->name }}</td>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  @endsection
