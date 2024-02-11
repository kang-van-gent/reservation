@extends('frontlayout')
@section('content')
<div>
    @foreach($roomtypes as $rt)
    <div class="row gy-5">
        @foreach($rt->roomtypeimgs as $index=>$img)
        <div class="col-md-4">
            <a href="{{ Storage::url($img->img_src) }}" data-lightbox="roomtypegallery">
                <img class="img-fluid" src="{{ Storage::url($img->img_src) }}" />
            </a>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@section('scripts')

<!-- LightBox Js -->
<script src="/vendor/lightbox2-2.11.4/dist/js/lightbox.min.js"></script>
<style type="text/css">
    .hide {
        display: none;
    }
</style>
@endsection
@endsection