@extends("layouts.master")

@section("page")
  <form action="{{url('products')}}" method="post">
    @csrf
    Name<br>
    <input type="text" name="name" />
    <br>
    <input type="submit" value="Save" />
  </form>

@endsection