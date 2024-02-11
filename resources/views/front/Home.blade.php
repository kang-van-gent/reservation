@extends('frontLayout')
@section('content')
<div class="container-fluid">
    @if(Session::has('customerlogin'))
    Welcome to The Cite Hotel <br>
    คุณ : {{session('data')[0]->fullname}}
    @endif

    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($roomtypes as $rt)
                @foreach($rt->roomtypeimgs as $index => $img)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ Storage::url($img->img_src) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h3>{{$rt->title}}</h3>
                        <p>{{$rt->detail}}</p>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

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
<script>
    var myCarousel = new bootstrap.Carousel(document.getElementById('header-carousel'), {
        interval: 2000, // Set to 0 or false to disable auto-sliding
        // Other options...
    });
</script>
<!-- Custom styles for this page -->
<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>
@endsection
@endsection