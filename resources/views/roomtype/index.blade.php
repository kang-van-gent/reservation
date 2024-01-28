@extends('layout')
@section('content')
<!-- Room Type -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
        @if($data)
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->title}}</td>
            <td>{{$d->price}}</td>
            <td>
                <a href="{{url('/roomtype/'.$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                <a href="{{url('/roomtype/'.$d->id).'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('/roomtype/'.$d->id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection