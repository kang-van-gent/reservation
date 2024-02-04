@extends('frontlayout')
@section('content')
<div class="container-fluid">
    @if(Session::has('customerlogin'))
    Welcome to The Cite Hotel <br>
    คุณ : {{session('data')[0]->fullname}}
    @endif
    <!-- Room Type -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room Types
            </h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Price</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($roomtypes)
                        @foreach($roomtypes as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->title}}</td>
                            <td>{{$d->price}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
@section('scripts')
<!-- Custom styles for this page -->
<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>
@endsection
@endsection