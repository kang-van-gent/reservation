@extends('layout')
@section('content')
<form method="post" action="{{url('/staff/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Full Name</th>
            <td><input type="text" value="{{$data->full_name}}" name="name" /></td>
        </tr>
        <tr>
            <th>Salary Amount</th>
            <td><input type="number" value="{{$data->salary_amt}}" name="salary" /></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary" />
            </td>
        </tr>
    </table>
</form>
@endsection