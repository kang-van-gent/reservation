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
        <!-- department  -->
        <form id="departmentCreate" action="{{route('department.store')}}" method="post">
            <table class="table table-bordered">
                @csrf
                <tr>
                    <th>Title</th>
                    <td><input class="form-control" type="text" name="title" /></td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td><textarea class="form-control" name="detail"></textarea></td>
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