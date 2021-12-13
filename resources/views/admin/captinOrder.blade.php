@extends('admin.partials.layout')
@section('content')

<div class="d-flex justify-content-around today">
    <a href="{{url("/admin/captin-order?param=today")}}">
        Today
    </a>
    <a href="{{url("/admin/captin-order")}}">
        All Time
    </a>
</div>
    <div class="card">
        <div class="card-body">
            
            @if (Session::has("msg"))
                <div class="alert alert-success">{{Session::get("msg")}}</div>
            @endif
            <h3>Captin Order</h3>
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Order From</th>
                    <th>Quantity</th>
                    <th>Room Number</th>
                    <th>Table Number</th>
                    <th>Cover</th>
                    <th>Unit Price</th>
                    <th>Name of Waitress</th>
                    
                    <th>Date</th>
                    <th colspan="3">Action</th>
                </thead>
                @foreach ($captinOrder as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->order_from}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->room_no}}</td>
                        <td>{{$item->table_no}}</td>
                        <td>{{$item->cover}}</td>
                        <td>{{$item->unit_price}}</td>
                        <td>{{$item->name_of_waitress}}</td>
                        <td>{{\Carbon\Carbon::parse($item->created_at)->format("d M, Y")}}</td>
                        <td><a href="{{url("/admin/captin-order/". $item->id)}}" style="color:black">View</a></td>
                        <td><a href="{{url("/admin/edit/captin-order/". $item->id)}}" style="color:black">Edit</a></td>
                        <td><a href="{{url("/admin/delete/captin-order/". $item->id)}}" style="color:black">Delete</a></td>

                    </tr>
                @endforeach
                
                <tr>
                    <td colspan="6">Total</td>
                    <td>N{{$total}}</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
@endsection