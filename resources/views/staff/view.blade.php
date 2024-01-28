@extends('layout')
@section('content')
<form method="post" action="{{url('/staff/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Full Name</th>
            <td><input type="text" value="{{$data->full_name}}" name="name" readonly /></td>
        </tr>
        <tr>
            <th>Salary Amount</th>
            <td><input type="number" value="{{$data->salary_amt}}" name="salary" readonly /></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="button" class="btn btn-primary" onclick="window.history.go(-1); return false;" />
            </td>
        </tr>
    </table>
</form>
@endsection