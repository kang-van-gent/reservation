@extends('layout')
@section('content')
<form method="post" action="{{url('/roomtype/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <td><input type="text" value="{{$data->title}}" name="title" /></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><input type="number" value="{{$data->price}}" name="price" /></td>
        </tr>
        <tr>
            <th>Detail</th>
            <td><textarea name="detail">{{$data->detail}}</textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary" />
            </td>
        </tr>
    </table>
</form>
@endsection