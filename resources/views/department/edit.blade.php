@extends('layout')
@section('content')
@if($errors->any())
@foreach($errors->all() as $error)
<p class="text-danger"> {{$error}}</p>
@endforeach
@endif
@if(Session::has('success'))
<p class="text-success"> {{session('success')}}</p>
@endif
<form method="post" action="{{url('/department/'.$data->id)}}">
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