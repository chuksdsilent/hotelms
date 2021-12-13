@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    <h3>Reservation Billing Info</h3>
                    <hr />
                    <form action="{{url("admin/delete-reservation-billing/". $data->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group mb-4">
                            <label for="">Class of Room</label>
                            <div>
                                <input type="text" value="{{$data->class_of_room}}" name="class_of_room" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Room Number</label>
                            <div>
                                <input type="text" value="{{$data->room_number}}" name="room_number" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Phone</label>
                            <div>
                                <input type="text" value="{{$data->phone}}" name="phone" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Occupation</label>
                            <div>
                                <input type="text" value="{{$data->occupation}}" name="occupation" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Amount Paid</label>
                            <div>
                                <input type="text" value="{{$data->amount_paid}}" name="amount_paid" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Check In Time</label>
                            <div>
                                <input type="text" value="{{$data->check_in_time}}" name="check_in_time" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Check Out Time</label>
                            <div>
                                <input type="text" value="{{$data->check_out_time}}" name="check_out_time" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Check In Date</label>
                            <div>
                                <input type="text" value="{{$data->check_in_date}}" name="check_in_date" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Check Out Date</label>
                            <div>
                                <input type="text" value="{{$data->check_out_date}}" name="check_out_date" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Customer Name</label>
                            <div>
                                <input type="text" value="{{$data->customer_name}}" name="customer_name" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Customer Address</label>
                            <div>
                                <input type="text" value="{{$data->customer_address}}" name="customer_address" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4"><button type="submit" class="app-btn">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection