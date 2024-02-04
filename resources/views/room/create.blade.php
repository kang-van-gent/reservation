    @extends('layout')
    @section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        @if($errors->any())
        @foreach($errors->all() as $error)
        <p class="text-danger"> {{$error}}</p>
        @endforeach
        @endif
        @if(Session::has('success'))
        <p class="text-success"> {{session('success')}}</p>
        @endif
        <!-- Room Type -->
        <form id="roomCreate" action="{{route('room.store')}}" method="post">
            <table class="table table-bordered">
                @csrf
                <tr>
                    <th>Select room type</th>
                    <td>
                        <select class="form-control" name="rt_id" id="exampleFormControlSelect1">
                            @if($roomtypes)
                            @foreach($roomtypes as $roomtype)
                            <option value="{{$roomtype->id}}">{{$roomtype->title}}</option>
                            @endforeach
                            @endif
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input type="text" class="form-control" name="title" /></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- /.container-fluid -->
    @endsection