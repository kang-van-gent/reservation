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
<form method="post" action="{{url('/staff/'.$data->id)}}">
    @csrf
    @method('put')
    <table class="table table-bordered">
        <tr>
            <th>Full Name</th>
            <td><input class="form-control" type="text" value="{{$data->full_name}}" name="name" /></td>
        </tr>
        <tr>
            <th>Select Department</th>
            <td>
                <select class="form-control" name="dp_id" id="exampleFormControlSelect1">
                    @if($departments)
                    @foreach($departments as $department)
                    <option @if($data->department_id == $department->id) selected @endif value="{{$department->id}}">{{$department->title}}</option>
                    @endforeach
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <th>Salary Amount</th>
            <td><input class="form-control" type="number" value="{{$data->salary_amt}}" name="salary" /></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary" />
            </td>
        </tr>
    </table>
</form>
@endsection