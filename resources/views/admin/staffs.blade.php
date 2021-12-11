@extends('admin.partials.layout')
@section('content')
    @if (Session::has("msg"))
    <div class="alert alert-success">{{Session::get("msg")}}</div>
        
    @endif
    <div class="card">
        <div class="card-body">
            <h3>Staffs</h3>
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date Registered</th>
                    <th>Action</th>
                </thead>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{\Carbon\Carbon::parse($item->created_at)->format("d M, Y")}}</td>
                        <td><a href="{{url("admin/staff/activate/". $item->username)}}" style="background-color: green; padding: .1rem 1rem; font-size: 12px;">{{ $item->activate == 1 ? "Deactivate" : "Activate"}}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection