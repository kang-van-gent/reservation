@extends('frontLayout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Room Type -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Booking
                <a href="{{url('/booking')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <p class='text-success'>{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <form method="post" action="{{url('/custbooking')}}">
                    @csrf
                    <table class="table table-bordered">

                        <tr>
                            <th>CheckIn Date <span class="text-danger">*</span></th>
                            <td><input type="date" name="checkin_date" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>CheckOut Date <span class="text-danger">*</span></th>
                            <td><input type="date" name="checkout_date" class="form-control checkin-date" /></td>
                        </tr>
                        <tr>
                            <th>Available Rooms <span class="text-danger">*</span></th>

                            <td>
                                <select class="form-control room-list" name="room_id">
                                    <option>-- Select Room --</option>
                                </select>
                                Room Price <span class="text-danger ">*</span>
                                <input type="text" name="roomprice" class="form-control room-price" hidden />
                            </td>
                        </tr>

                        <tr>
                            <th>Total Adults <span class="text-danger">*</span></th>
                            <td><input type="text" name="total_adults" class="form-control" /></td>

                        </tr>
                        <tr>
                            <th>Total Children</th>

                            <td><input type="text" name="total_children" class="form-control" /></td>

                        </tr>
                        <tr>
                            <td colspan="2">

                                <input type="submit" class="btn btn-primary" />

                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $(".checkin-date").on('blur', function() {
            var _checkindate = $(this).val();
            $.ajax({
                url: "{{url('/custbooking')}}/available-rooms/" + _checkindate,
                dataType: 'json',
                beforeSend: function() {
                    $(".room-list").html('<option>--- Loading ---</option>');
                },
                success: function(res) {
                    var _html = '';
                    $.each(res.data, function(index, row) {
                        console.log(row.roomtype.price)
                        _html += '<option data-price="' + row.roomtype.price + '" value="' + row.room.id + '">' + row.room.title + '-' + row.roomtype.title + '</option>';
                    });
                    $(".room-list").html(_html);
                    var _selectedPrice = $(".room-list").find("option:selected").after("data-price");
                    $(".room-price").val(_selectedPrice);
                }
            });
        });
        $(".room-list").on("change", function() {
            var _selectedPrice = $(this).find(('option:selected')).attr('data-price');
            $(".room-price").val(_selectedPrice)

        })
    });
</script>
@endsection