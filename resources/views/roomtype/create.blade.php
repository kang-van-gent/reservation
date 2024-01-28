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
        <form id="roomtypeCreate" action="{{route('roomtype.store')}}" method="post">
            <table class="table table-bordered">
                @csrf
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="title" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input type="number" name="price" /></td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td><textarea name="detail"></textarea></td>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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