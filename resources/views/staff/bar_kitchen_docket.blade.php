@extends('staff.partials.layout')
@section('content')
    <div class="main-content">
        <div class="card mt-4">
            <div class="card-body">
                <h3>BAR KITCHEN DOCKET</h3>
                <hr />
                <form action="{{url("staff/bar-kitchen-docket")}}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="form-group col-md-6 mb-4">
                            <label for="">Reference Number</label>
                            <input type="text" name="ref_no" value="{{old("ref_no")}}"  class="form-control">
                            @if ($errors->first("ref_no"))
                            <span>{{$errors->first("ref_no")}}</span>
                            @endif
                        </div>
                        @csrf
                        <div class="form-group col-md-6 mb-4">
                            <label for="">Room Number</label>
                            <input type="text" name="room_no" value="{{old("room_no")}}"  class="form-control">
                            @if ($errors->first("room_no"))
                            <span>{{$errors->first("room_no")}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 mb-4">
                            <label for="">Cashier Name</label>
                            <input type="text" name="cashier_name" value="{{old("cashier_name")}}"  class="form-control">
                            @if ($errors->first("cashier_name"))
                            <span>{{$errors->first("cashier_name")}}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 mb-4">
                            <label for="">Customer Name</label>
                            <input type="text" name="customer_name" value="{{old("customer_name")}}"  class="form-control">
                            @if ($errors->first("customer_name"))
                            <span>{{$errors->first("customer_name")}}</span>
                            @endif
                        </div>
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
            $("#the-row").append('<div class="my-row"><div class="row" id="row'+i+'" ><div class="form-group col-md-3 mb-4"><label for="">Description</label><input id="desc" type="text" name="desc[]" class="form-control"></div><div class="form-group col-md-3  mb-4"><label for="">Unit Price</label><input type="text" name="unit_price[]" class="form-control"></div><div class="form-group col-md-3 mb-4"><label for="">Total Amount Paid</label><input type="text" name="amount[]" class="form-control"></div><div class="col-md-3"><button type="button" class="btn_remove mt-4" name="remove" id="'+ i +'">X</button></div></div></div>');
        })

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            console.log("removed" + button_id);
        $('#row' + button_id).remove();
    });
    </script>
@endsection