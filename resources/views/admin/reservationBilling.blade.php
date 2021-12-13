@extends('admin.partials.layout')
@section('content')
    <div class="d-flex justify-content-around today">
        <a href="{{url("/admin/reservation-billing?param=today")}}">
            Today
        </a>
        <a href="{{url("/admin/reservation-billing")}}">
            All Time
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            
            @if (Session::has("msg"))
                <div class="alert alert-success">{{Session::get("msg")}}</div>
            @endif
            <h3>Reservation Billing</h3>
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Class of Room</th>
                    <th>Room Number</th>
                    <th>Check in time</th>
                    <th>Check out Time</th>
                    <th>Check in Date</th>
                    <th>Check out Date</th>  
                    <th>Amount Paid</th>
                    <th colspan="3">Action</th>                  
                </thead>
                @foreach ($reservationBilling as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->class_of_room}}</td>
                        <td>{{$item->room_number}}</td>
                        <td>{{$item->check_in_time}}</td>
                        <td>{{$item->check_out_time}}</td>
                        <td>{{$item->check_in_date}}</td>
                        <td>{{$item->check_out_date}}</td>
                        <td>N{{number_format($item->amount_paid, 2)}}</td>
                        <td><a href="{{url("/admin/reservation-billing/". $item->id)}}" style="color:black">View</a></td>
                        <td><a href="{{url("/admin/edit/reservation-billing/". $item->id)}}" style="color:black">Edit</a></td>
                        <td><a href="{{url("/admin/delete-reservation-billing/". $item->id)}}" style="color:black">Delete</a></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="7">Total</td>
                        <td>N{{number_format($total, 2)}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            </table>
        </div>
    </div>
@endsection