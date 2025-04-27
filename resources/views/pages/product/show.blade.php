@extends("layouts.master")

@section("page")

<table class="table">
    <tr>  
        <td>Id</td><td>{{$product->id}}</td>
    </tr>
    <tr>  
        <td>Name</td><td>{{$product->name}}</td>
    </tr>
    <tr>  
        <td>Photo</td><td><img src='{{url("img/$product->photo")}}' /></td>
    </tr>
</table>
@endsection