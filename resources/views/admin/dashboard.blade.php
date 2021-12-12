@extends('admin.partials.layout')
@section('content')
    <div class="dashboard">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-one">
                    <a href="{{url("admin/bar-kitchen-docket?param=today")}}">
                        <h3>{{\App\Models\BarKitchenDocket::whereDate('created_at', '=',\Carbon\Carbon::now()->toDateString())->count()}}</h3>
                        <div>Bar Kitchen Docket Today</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-two">
                    <a href="{{url("admin/captin-order?param=today")}}">
                        <h3>{{\App\Models\CaptinOrder::whereDate('created_at', '=',\Carbon\Carbon::now()->toDateString())->count()}}</h3>
                        <div>Captin Order Today</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-three">
                    <a href="{{url("admin/reservation-billing?param=today")}}">
                        <h3>{{\App\Models\ReservationBilling::whereDate('created_at', '=',\Carbon\Carbon::now()->toDateString())->count()}}</h3>
                        <div>Reservation Billing Today</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-four">
                    <a href="{{url("admin/bar-kitchen-docket?param=today")}}">
                        <h3>{{\App\Models\BarKitchenDocket::whereDate('created_at', '=',\Carbon\Carbon::now()->toDateString())->sum("amount_paid")}}</h3>
                        <div> Made from Bar Kitchen Docket Today</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-five">
                    <a href="{{url("admin/captin-order?param=today")}}">
                        <h3>{{\App\Models\CaptinOrder::whereDate('created_at', '=',\Carbon\Carbon::now()->toDateString())->sum("unit_price")}}</h3>
                        <div>Made from Captin Order Today</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-six">
                    <a href="{{url("admin/reservation-billing?param=today")}}">
                        <h3>{{\App\Models\ReservationBilling::whereDate('created_at', '=',\Carbon\Carbon::now()->toDateString())->sum("amount_paid")}}</h3>
                        <div>Made from Reservation Billing Today</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-one">
                    <a href="{{url("admin/bar-kitchen-docket")}}">
                        <h3>{{\App\Models\BarKitchenDocket::count()}}</h3>
                        <div>All time Bar Kitchen Docket</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-two">
                    <a href="{{url("admin/captin-order")}}">
                        <h3>{{App\Models\CaptinOrder::count()}}</h3>
                        <div>All time Captin Order</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-three">
                    <a href="{{url("admin/reservation-billing")}}">
                        <h3>{{App\Models\ReservationBilling::count()}}</h3>
                        <div>All time Reservation Billing</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-four">
                    <a href="{{url("admin/bar-kitchen-docket")}}">
                        <h3>{{\App\Models\BarKitchenDocket::sum("amount_paid")}}</h3>
                        <div>All time Amount  Made from Bar Kitchen Docket</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-five">
                    <a href="{{url("admin/captin-order")}}">
                        <h3>{{App\Models\CaptinOrder::sum("unit_price")}}</h3>
                        <div>All time Amount Made from Captin Order</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-12">
                <div class="item col-six">
                    <a href="{{url("admin/reservation-billing")}}">
                        <h3>{{App\Models\ReservationBilling::sum("amount_paid")}}</h3>
                        <div>All time Amount Made from Reservation Billing</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection