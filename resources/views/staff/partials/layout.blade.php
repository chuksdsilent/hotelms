<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>
    <link href="{{asset("bootstrap/css/bootstrap.css")}}" rel="stylesheet" />
    <link href="{{asset("css/style.css")}}" rel="stylesheet" />
</head>
<body class="staff">
    <div class="top-nav d-flex justify-content-between">
        <h4>
            MORREN-XRIS 
        </h4>
        <div class="d-flex user-nav">
            <img src="{{asset("images/profile.png")}}" alt="" style="margin-right: 1rem;">
           <div style="font-size: 20px; color:white;">
                {{\App\Models\Staff::where("username", Auth::user()->username)->value("name")}}
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 col-12">
                <div class="main-side-bar">
                    <a href="{{asset("staff/bar-kitchen-docket")}}">Bar Kitchen Docket</a>
                    <a href="{{asset("staff/captin-order")}}">Captin Order</a>
                    <a href="{{asset("staff/reservation-billing")}}">Reservation Billing</a>
                    <a href="{{asset("staff/change-password")}}">Change Password</a>
                    <a href="{{asset("staff/logout")}}">Logout</a>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 col-12">
                <div class="d-flex justify-content-center">
                    @yield('content')
                </div>
                
            </div>
        </div>
    </div>
</body>
<script src="{{asset("jquery.js")}}"></script>

</html>