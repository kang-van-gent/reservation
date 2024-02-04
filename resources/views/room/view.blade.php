@extends('layout')
@section('content')
<form method="post" action="{{url('/room/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>RoomType</th>
            <td><input class="form-control" type="text" value="{{$roomtype->title}}" name="title" readonly /></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><input class="form-control" type="text" value="{{$data->title}}" name="title" readonly /></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" class="btn btn-primary" onclick="window.history.go(-1); return false;" value="back" />
            </td>
        </tr>
    </table>
</form>
@endsection