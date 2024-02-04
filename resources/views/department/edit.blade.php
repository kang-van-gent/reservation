@extends('layout')
@section('content')
<form method="post" action="{{url('/room/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <td><input type="text" class="form-control" value="{{$data->title}}" name="title" /></td>
        </tr>
        <tr>
            <th>Detail</th>
            <td><textarea class="form-control" name="detail">{{$data->detail}}</textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary" />
            </td>
        </tr>
    </table>
</form>
@endsection