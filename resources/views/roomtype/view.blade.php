@extends('layout')
@section('content')
<form method="post" action="{{url('/roomtype/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <td><input type="text" value="{{$data->title}}" name="title" readonly /></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><input type="number" value="{{$data->price}}" name="price" readonly /></td>
        </tr>
        <tr>
            <th>Detail</th>
            <td><textarea name="detail" readonly>{{$data->detail}}</textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" class="btn btn-primary" onclick="window.history.go(-1); return false;" value="back" />
            </td>
        </tr>
    </table>
</form>
@endsection