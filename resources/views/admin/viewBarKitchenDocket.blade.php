@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    <h3>Bar Kitchen Docket Info</h3>
                    <hr />
                    <form action="{{url("admin/staff/create")}}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="">Reference Number</label>
                            <div>
                                {{$data->ref_no}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Room Number</label>
                            <div>
                                {{$data->room_no}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Customer Name</label>
                            <div>
                                {{$data->customer_name}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Cashier Name</label>
                            <div>
                                {{$data->cashier_name}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Description</label>
                            <div>
                                {{$data->desc}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Unit Price</label>
                            <div>
                                {{$data->unit_price}}
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Amount</label>
                            <div>
                                {{$data->amount_paid}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection