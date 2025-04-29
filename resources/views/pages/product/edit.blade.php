<?php
  //  use App\Models\ProductSection;
  //  $sections=ProductSection::all();

?>
@extends("layouts.master")

@section("page")
<a class="btn btn-success" href="{{url('products')}}">Back</a>
<form action="{{url('products/'.$product->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method("PUT")
  Name<br>
  <input type="text" name="name" value="{{$product->name}}" />
  <br>
  Price<br>
  <input type="text" name="offer_price" value="{{$product->offer_price}}" />
  <br>
  Photo<br>
  <input type="file" name="photo" />
  <br>
  Section<br>
  <select name="product_section_id">
  @foreach($sections as $section)
   <option value="{{$section->id}}">{{$section->name}}</option>  
  @endforeach
 </select>
 <br>
  <input type="submit" value="Update" />
</form>
@endsection