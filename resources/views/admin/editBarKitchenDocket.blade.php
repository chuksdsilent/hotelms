@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    <h3>Bar Kitchen Docket Info</h3>
                    <hr />
                    <form action="{{url("admin/edit/bar-kitchen-docket/" . $data->id)}}" method="POST">
                        @method("PUT")
                        @csrf
                        <div class="form-group mb-4">
                            <label for="">Reference Number</label>
                            <div>
                                <input type="text" value="{{$data->ref_no}}" name="ref_no" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Room Number</label>
                            <div>
                                <input type="text" value="{{$data->room_no}}" name="room_no" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Customer Name</label>
                            <div>
                                <input type="text" value="{{$data->customer_name}}" name="" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Cashier Name</label>
                            <div>
                                <input type="text" value="{{$data->cashier_name}}" name="cashier_name" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Description</label>
                            <div>
                                <input type="text" value="{{$data->desc}}" name="desc" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Unit Price</label>
                            <div>
                                <input type="text" value="{{$data->unit_price}}" name="unit_price" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Amount</label>
                            <div>
                                <input type="text" value="{{$data->amount_paid}}" name="amount_paid" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group mb-4"><button type="submit" class="app-btn">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection