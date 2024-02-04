@extends('layout')
@section('content')
<form method="post" action="{{url('/room/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <td><input class="form-control" type="text" value="{{$data->title}}" name="title" readonly /></td>
        </tr>
        <tr>
            <th>Detail</th>
            <td><textarea class="form-control" name="detail" readonly>{{$data->detail}}</textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <input class="form-control" type="button" class="btn btn-primary" onclick="window.history.go(-1); return false;" value="back" />
            </td>
        </tr>
    </table>
</form>
@endsection