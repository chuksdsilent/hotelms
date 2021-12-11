@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    <h3>Reservation Billing Info</h3>
                    <hr />
                    <form action="{{url("admin/staff/create")}}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="">Class of Room</label>
                            <div>
                                {{$data->class_of_room}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Room Number</label>
                            <div>
                                {{$data->room_number}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Phone</label>
                            <div>
                                {{$data->phone}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Occupation</label>
                            <div>
                                {{$data->occupation}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Amount Paid</label>
                            <div>
                                {{$data->amount_paid}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Check In Time</label>
                            <div>
                                {{$data->check_in_time}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Check Out Time</label>
                            <div>
                                {{$data->check_out_time}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Check In Date</label>
                            <div>
                                {{$data->check_in_date}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Check Out Date</label>
                            <div>
                                {{$data->check_out_date}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Customer Name</label>
                            <div>
                                {{$data->customer_name}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Customer Address</label>
                            <div>
                                {{$data->customer_address}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection