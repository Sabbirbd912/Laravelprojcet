@extends("layouts.master")

    @section("page")
        <form action="{{url('products/1')}}" method="post">
            @csrf
            @method('PUT')
            Name <br>
            <input type="text" name="name" /> <br>
            <input type="submit" value="update"/>
        </form>

    @endsection