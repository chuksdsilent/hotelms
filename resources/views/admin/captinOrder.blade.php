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
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
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
                        <td>{{$item->amount}}</td>
                        <td>{{$total}}</td>
                        <td><a href="{{url("/admin/captin-order/". $item->id)}}" style="color:black">View</a></td>

                    </tr>
                @endforeach
                
                <tr>
                    <td colspan="8">Total</td>
                    <td>N{{$total}}</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
@endsection