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
        <form id="staffCreate" action="{{route('staff.store')}}" method="post">
            <table class="table table-bordered">
                @csrf
                <tr>
                    <th>Full Name</th>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                    <th>Salary Amount</th>
                    <td><input type="number" name="salary" /></td>
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