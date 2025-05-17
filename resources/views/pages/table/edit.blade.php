@extends("layouts.master")

@section("page")
<a class="btn btn-success" href="{{url('tables')}}">Back</a>
<form action="{{url('tables/'.$table->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method("PUT")
  Name<br>
  <input type="text" name="name" value="{{$table->name}}" />
  <br>
  Status<br>
  <input type="number" name="status" value="{{$table->status}}" />
  <br>
  Seats<br>
  <input type="number" name="seats" value="{{$table->seats}}" />
  <br>
  Photo<br>
  <input type="file" name="photo" />
  <br>
 <br>
  <input type="submit" value="Update" />
</form>
@endsection