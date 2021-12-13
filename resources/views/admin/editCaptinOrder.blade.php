@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    <h3>Captin Order Info</h3>
                    <hr />
                    <form action="{{url("admin/edit/captin-order/". $data->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group mb-4">
                            <label for="">Serial Number</label>
                            <div>
                                {{$data->serial_no}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Order From</label>
                            <div>
                                <input type="text" value="{{$data->order_from}}" name="order_from" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Time</label>
                            <div>
                                <input type="text" value="{{$data->time}}" name="time" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Description</label>
                            <div>
                                <input type="text" value="{{$data->qty}}" name="qty" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Room No.</label>
                            <div>
                                <input type="text" value="{{$data->room_no}}" name="room_no" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Amount</label>
                            <div>
                                <input type="text" value="{{$data->unit_price}}" name="unit_price" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Name of Waitress</label>
                            <div>
                                <input type="text" value="{{$data->name_of_waitress}}" name="name_of_waitress" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4"><button type="submit" class="app-btn">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection