@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    <h3>Captin Order Info</h3>
                    <hr />
                    <form action="{{url("admin/staff/create")}}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="">Serial Number</label>
                            <div>
                                {{$data->serial_no}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Order From</label>
                            <div>
                                {{$data->order_from}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Time</label>
                            <div>
                                {{$data->time}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Description</label>
                            <div>
                                {{$data->qty}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Room No.</label>
                            <div>
                                {{$data->room_no}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Amount</label>
                            <div>
                                {{$data->amount}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Name of Waitress</label>
                            <div>
                                {{$data->name_of_waitress}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection