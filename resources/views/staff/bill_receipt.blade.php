<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset("bootstrap/css/bootstrap.css")}}" rel="stylesheet" />

    <link href="{{asset("css/style.css")}}" rel="stylesheet" />
    <style>
        .row{
            margin: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <div class="header">
            <h3>MORREN-XRIS</h3>
            <div>SUITES & GARDEN</div>
            <div>..comfort & relaxation</div>
        </div>
        <div class="d-flex justify-content-center">
            <h4>Billling Reservation</h4>
        </div>
        

        <div class="receipt-container">
           <div class="row">
               <div class="col-md-4">Date:</div>
               <div class="col-md-8">{{\Carbon\Carbon::now()->format("d F, Y")}}</div>
           </div>
           <div class="row">
               <div class="col-md-6">Class of Room:</div>
               <div class="col-md-6">{{$class_of_room}}</div>
           </div>
           <div class="row">
               <div class="col-md-6">Room Number:</div>
               <div class="col-md-6">{{$room_number}}</div>
           </div>
           <div class="row">
               <div class="col-md-6">Name </div>
               <div class="col-md-6">{{$customer_name}}</div>
           </div>
           <div class="row">
               <div class="col-md-6">Check In Time </div>
               <div class="col-md-6">{{$check_in_time}} </div>
            </div>
            <div class="row">
                <div class="col-md-6">Check out Time </div>
                <div class="col-md-6">{{$check_out_time}} </div>
            </div>
            <div class="row">
               <div class="col-md-6">Check In Date </div>
               <div class="col-md-6">{{\Carbon\Carbon::parse($check_in_date)->format("d M, Y")}} </div>
            </div>
            <div class="row">
                <div class="col-md-6">Check In Date </div>
                <div class="col-md-6">{{\Carbon\Carbon::parse($check_out_date)->format("d M, Y")}}</div>
            </div>
            <div class="row">
                <div class="col-md-6"> Amount Paid</div>
                <div class="col-md-6">&#8358;{{number_format($amount_paid, 2)}}</div>
            </div>
            <div class="row">
                <div class="col-md-6"> Amount In Words</div>
                <div class="col-md-6">{{$amount_paid_words}}</div>
            </div>
           <div class="row">
               <div class="col-md-6">
                    <div>................................</div>
                    <div> Cashier Signature </div>
                </div>
               <div class="col-md-6">
                <div>................................</div>
                <div> Guest Signature </div></div>
           </div>

        </div>
    </div>
    <div class="no-print">
     <a href="{{url("staff/reservation-billing")}}">Create new Billing Reservation</a>
     <button onclick="window.print()">Print</button>
    </div>
</body>
</html>