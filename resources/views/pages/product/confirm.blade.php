@extends("layouts.master")

@section("page")
<a class="btn btn-success" href="{{url('products')}}">Back</a>
<br>
Are  you sure?
<br>
<h2>{{$product->name}}</h2>

<form action="{{url('products/'.$product->id)}}" method="post">
  @csrf
  @method("DELETE")
  <input class="btn btn-danger" type="submit" value="Confirm" />
</form>
@endsection