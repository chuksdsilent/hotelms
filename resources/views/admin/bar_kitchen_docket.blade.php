@extends('admin.partials.layout')
@section('content')

<div class="d-flex justify-content-around today">
    <a href="{{url("/admin/bar-kitchen-docket?param=today")}}">
        Today
    </a>
    <a href="{{url("/admin/bar-kitchen-docket")}}">
        All Time
    </a>
</div>
    <div class="card">
        <div class="card-body">
            @if (Session::has("msg"))
                <div class="alert alert-success">{{Session::get("msg")}}</div>
            @endif
            <h3>Bar Kitchen Docket</h3>
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Ref. No</th>
                    <th>Room No</th>
                    <th>Customer Name</th>
                    <th>Cashier Name</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th colspan="3">Action</th>
                </thead>
                @foreach ($barKitchenDocket as $key => $item)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $item->ref_no}}</td>
                        <td>{{ $item->room_no }}</td>
                        <td>{{ $item->customer_name}}</td>
                        <td>{{$item->cashier_name}}</td>
                        <td>{{$item->desc}}</td>
                        <td>{{$item->unit_price}}</td>
                        <td>{{$item->amount_paid}}</td>
                        <td>{{\Carbon\Carbon::parse($item->created_at)->format("d M, Y")}}</td>
                        <td><a href="{{url("/admin/bar-kitchen-docket/". $item->id)}}" style="color:black">View</a></td>
                        <td><a href="{{url("/admin/edit/bar-kitchen-docket/". $item->id)}}" style="color:black">Edit</a></td>
                        <td><a href="{{url("/admin/delete-bar-kitchen-docket/". $item->id)}}" style="color:black">Delete</a></td>

                    </tr>
                @endforeach                
                <tr>
                    <td colspan="7">Total</td>
                    <td>N{{$total}}</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
@endsection