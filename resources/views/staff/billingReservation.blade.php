@extends('staff.partials.layout')
@section('content')
    <div class="main-content">
        <div class="card mt-4">
            <div class="card-body">
                <h3>RESERVATION BILLING</h3>
                <hr />
                <form action="{{url("staff/reservation-billing")}}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="">Class of Room</label>
                        <input type="text" name="class_of_room" value="{{old("class_of_room")}}"  class="form-control">
                        @if ($errors->first("class_of_room"))
                           <span> {{$errors->first("class_of_room")}} </span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Room Number</label>
                        <input type="text" name="room_number" value="{{old("room_number")}}"  class="form-control">
                        @if ($errors->first("room_number"))
                            <span>{{$errors->first("room_number")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Customer Name</label>
                        <input type="text" name="customer_name" value="{{old("customer_name")}}"  class="form-control">
                        @if ($errors->first("customer_name"))
                           <span> {{$errors->first("customer_name")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Customer Address</label>
                        <input type="text" name="customer_address" value="{{old("customer_address")}}"  class="form-control">
                        @if ($errors->first("customer_address"))
                           <span> {{$errors->first("customer_address")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" value="{{old("phone")}}"  class="form-control">
                        @if ($errors->first("phone"))
                           <span> {{$errors->first("phone")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Occupation</label>
                        <input type="text" name="occupation" value="{{old("occupation")}}"  class="form-control">
                        @if ($errors->first("occupation"))
                           <span> {{$errors->first("occupation")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Amount Paid</label>
                        <input type="text" name="amount_paid" value="{{old("amount_paid")}}"  class="form-control">
                        @if ($errors->first("amount_paid"))
                           <span> {{$errors->first("amount_paid")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Amount Paid In Words</label>
                        <input type="text" name="amount_paid_words" value="{{old("amount_paid_words")}}"  class="form-control">
                        @if ($errors->first("amount_paid_words"))
                           <span> {{$errors->first("amount_paid_words")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Check in Time</label>
                        <input type="text" name="check_in_time" value="{{old("check_in_time")}}"  class="form-control">
                        @if ($errors->first("check_in_time"))
                           <span> {{$errors->first("check_in_time")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Check out Time</label>
                        <input type="text" name="check_out_time" value="{{old("check_out_time")}}"  class="form-control">
                        @if ($errors->first("check_out_time"))
                           <span> {{$errors->first("check_out_time")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Date of Check in</label>
                        <input type="date" name="check_in_date" value="{{old("check_in_date")}}"  class="form-control">
                        @if ($errors->first("check_in_date"))
                           <span> {{$errors->first("check_in_date")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Date of Check out</label>
                        <input type="date" name="check_out_date" value="{{old("check_out_date")}}"  class="form-control">
                        @if ($errors->first("check_out_date"))
                           <span> {{$errors->first("check_out_date")}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <input type="submit" value="Submit" class="app-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection