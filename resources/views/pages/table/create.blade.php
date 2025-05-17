@extends("layouts.master")

@section("page")
<form action="{{url('tables')}}" method="post" enctype="multipart/form-data">
  @csrf
  Name<br>
  <input type="text" name="name" />
  <br>
  Status <br>
  <input type="number" name="status"/>
  <br>
  Photo<br>
  <input type="file" name="photo" />
  <br>
  Seats <br>
    <input type="number" name="seats"/>
  <br>
  <input type="submit" value="Save" />
</form>
@endsection