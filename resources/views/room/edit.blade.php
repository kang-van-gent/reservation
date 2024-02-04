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
<form method="post" action="{{url('/room/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Select room type</th>
            <td>
                <select class="form-control" name="rt_id" id="exampleFormControlSelect1">
                    <!-- <option class="text-success" selected>{{$data->roomtype_id}}</option> -->
                    @if($roomtypes)
                    @foreach($roomtypes as $roomtype)
                    <option @if($data->roomtype_id == $roomtype->id) selected @endif value="{{$roomtype->id}}">{{$roomtype->title}}</option>
                    @endforeach
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <th>Title</th>
            <td><input type="text" class="form-control" value="{{$data->title}}" name="title" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary" />
            </td>
        </tr>
    </table>
</form>
@endsection