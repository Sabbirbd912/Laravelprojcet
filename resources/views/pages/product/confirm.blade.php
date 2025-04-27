@extends("layouts.master")

    @section("page")

        Are you Sure!
        <form action="{{url('products/'.$id)}}" method="post">
            @csrf
            @method("DELETE")
            <input class="btn btn-danger" type="submit" value="Confirm"/>
        </form>
    @endsection