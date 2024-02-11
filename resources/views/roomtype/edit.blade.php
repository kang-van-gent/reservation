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
<form method="post" enctype="multipart/form-data" action="{{url('/roomtype/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <td><input class="form-control" type="text" value="{{$data->title}}" name="title" /></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><input class="form-control" type="number" value="{{$data->price}}" name="price" /></td>
        </tr>
        <tr>
            <th>Detail</th>
            <td><textarea class="form-control" name="detail">{{$data->detail}}</textarea></td>
        </tr>
        <tr>
            <td>Gallery Images</td>
            <td>
                <table class="table table-bordered mt-3">
                    <tr>
                        <input type="file" multiple name="imgs[]" />
                        @foreach($data->roomtypeimgs as $img)
                        <td class="imgcol{{$img->id}}">
                            <img width="150" src="{{ Storage::url($img->img_src) }}" />
                            <p class="mt-2">
                                <button type="button" class="btn btn-danger btn-sm delete-image" data-image-id="{{$img->id}}"><i class="fa fa-trash" onclick="deleteImage({{$img->id}})"></i> </button>
                            </p>
                        </td>
                        @endforeach
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary" />
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">
    function deleteImage(imgid) {
        var result = confirm('Are you sure you want to delete this image??');
        if (result) {

            $.ajax({
                url: "{{url('/admin/roomtypeimage/delete')}}/" + imgid,
                dataType: 'json',
                success: function(res) {
                    if (res.bool == true) {
                        $(".imgcol" + imgid).remove();
                    }
                }
            });
        }
    }
</script>
@endsection