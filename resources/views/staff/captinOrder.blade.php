@extends('staff.partials.layout')
@section('content')
    <div class="main-content">
        <div class="card mt-4">
            <div class="card-body">
                <h3>CAPTIN ORDER</h3>
                <hr />
                <form action="{{url("staff/captin-order")}}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="">Ordered From</label>
                        <input type="text" name="order_from" value="{{old("order_from")}}"  class="form-control">
                        @if ($errors->first("order_from"))
                            <span>{{$errors->first("order_from")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Room Number</label>
                        <input type="text" name="room_no" value="{{old("room_no")}}"  class="form-control">
                        @if ($errors->first("room_no"))
                            <span>{{$errors->first("room_no")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Table Number</label>
                        <input type="text" name="table_no" value="{{old("table_no")}}"  class="form-control">
                        @if ($errors->first("table_no"))
                            <span>{{$errors->first("table_no")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Time</label>
                        <input type="text" name="time" value="{{old("time")}}"  class="form-control">
                        @if ($errors->first("time"))
                            <span>{{$errors->first("table_no")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Cover</label>
                        <input type="text" name="cover" value="{{old("cover")}}"  class="form-control">
                        @if ($errors->first("cover"))
                            <span>{{$errors->first("cover")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Name of Waitress</label>
                        <input type="text" name="name_of_waitress" value="{{old("name_of_waitress")}}"  class="form-control">
                        @if ($errors->first("name_of_waitress"))
                        <span>{{$errors->first("name_of_waitress")}}</span>
                        @endif
                    </div>
                    <div><a href="#" id="add-the-row" class="app-btn">Add</a></div>
                    <div id="the-row" class="pb-4">
                        
                    </div>
                    <div class="form-group mb-4">
                        <input type="submit" value="Submit" class="app-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="{{asset("jquery.js")}}"></script>
<script>
    $("#add-the-row").on("click", function(e){ 
        e.preventDefault();
        i=0;
        var inputs = $('#desc');
        if(inputs.last().length > 0) {
            // Split name to get only last part of name, the numeric one
            i = parseInt(inputs.last()[0].name.split('_')[1]);
        }
        i++;
        $("#the-row").append('<div class="my-row"><div class="row" id="row'+i+'" ><div class="form-group col-md-3 mb-4"><label for="">Description</label><input id="desc" type="text" name="desc[]" class="form-control"></div><div class="form-group col-md-3  mb-4"><label for="">Unit Price</label><input type="text" name="unit_price[]" class="form-control"></div><div class="form-group col-md-3  mb-4"><label for="">Quantity</label><input type="text" name=qty[]" class="form-control"></div><div class="col-md-3"><button type="button" class="btn_remove mt-4" name="remove" id="'+ i +'">X</button></div></div></div>');
    })

    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        console.log("removed" + button_id);
    $('#row' + button_id).remove();
});
</script>
@endsection