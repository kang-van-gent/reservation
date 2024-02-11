@extends('layout')
@section('content')
<form method="post" action="{{url('/roomtype/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <td><input class="form-control" type="text" value="{{$data->title}}" name="title" readonly /></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><input class="form-control" type="number" value="{{$data->price}}" name="price" readonly /></td>
        </tr>
        <tr>
            <th>Detail</th>
            <td><textarea class="form-control" name="detail" readonly>{{$data->detail}}</textarea></td>
        </tr>
        <tr>
            <th>Gallery Images</th>
            <td>
                <table class=" table-bordered mt-3">
                    <tr>
                        @foreach($data->roomtypeimgs as $img)
                        <td class="imgcol{{$img->id}}"><img width="150" src="{{ Storage::url($img->img_src) }} " />
                        </td>
                        @endforeach
                    </tr>

</form>
@endsection