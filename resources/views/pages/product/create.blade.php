@extends("layouts.master")

@section("page")
<form action="{{url('products')}}" method="post" enctype="multipart/form-data">
  @csrf
  Name<br>
  <input type="text" name="name" />
  <br>
  Photo<br>
  <input type="file" name="photo" />
  <br>
  <input type="submit" value="Save" />
</form>
@endsection