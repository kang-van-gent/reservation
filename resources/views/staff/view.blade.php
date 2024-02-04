@extends('layout')
@section('content')
<form method="post" action="{{url('/staff/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Full Name</th>
            <td><input class="form-control" type="text" value="{{$data->full_name}}" name="name" readonly /></td>
        </tr>
        <tr>
            <th>Department</th>
            <td><input class="form-control" type="text" value="{{$departments->title}}" name="name" readonly /></td>
        </tr>
        <tr>
            <th>Salary Amount</th>
            <td><input class="form-control" type="number" value="{{$data->salary_amt}}" name="salary" readonly /></td>
        </tr>

        <tr>
            <td colspan="2">
                <input value="back" type="button" class="btn btn-primary" onclick="window.history.go(-1); return false;" />
            </td>
        </tr>
    </table>
</form>
@endsection