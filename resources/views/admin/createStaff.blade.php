@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    <h3>Create Staff</h3>
                    <hr />
                    <form action="{{url("admin/staff/create")}}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="">Username</label>
                            <input type="text" name="username" id="" class="form-control">
                            @if ($errors->first("username"))
                                <span>{{$errors->first("username")}}</span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Full Name</label>
                            <input type="text" name="name" id="" class="form-control">
                            @if ($errors->first("full_name"))
                                <span>{{$errors->first("full_name")}}</span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="" class="form-control">
                            @if ($errors->first("phone"))
                                <span>{{$errors->first("phone")}}</span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Address</label>
                            <input type="text" name="address" id="" class="form-control">
                            @if ($errors->first("address"))
                                <span>{{$errors->first("address")}}</span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                           <button type="submit" class="app-btn">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection