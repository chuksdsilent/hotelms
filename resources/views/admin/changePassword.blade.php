@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    @if (Session::has("msg"))
                        <div class="alert alert-success">{{Session::get("msg")}}</div>
                    @endif
                    <h3>Change Password</h3>
                    <hr />
                    <form action="{{url("change-password")}}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="">Old Password</label>
                            <input type="password" name="password" id="" class="form-control">
                            @if ($errors->first("password"))
                                <span>{{$errors->first("password")}}</span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="">New Password</label>
                            <input type="password" name="new_password" id="" class="form-control">
                            @if ($errors->first("new_password"))
                                <span>{{$errors->first("new_password")}}</span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Confirm Password</label>
                            <input type="password" name="new_confirm_password" id="" class="form-control">
                            @if ($errors->first("new_confirm_password"))
                                <span>{{$errors->first("new_confirm_password")}}</span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                           <button type="submit" class="app-btn">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection