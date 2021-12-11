<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="{{asset("bootstrap/css/bootstrap.css")}}" rel="stylesheet" />
    <link href="{{asset("css/style.css")}}" rel="stylesheet" />
</head>
<body class="staff admin">
    <div class="top-nav d-flex justify-content-between">
        <h4>
            MORREN-XRIS 
        </h4>
        <div class="d-flex user-nav">
            <img src="{{asset("images/profile.png")}}" alt="" style="margin-right: 1rem;">
            <div style="color:white; font-size: 22px;"> Admin </div> 
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-2 col-sm-12 col-xs-12 col-12">
                <div class="main-side-bar">
                    <a href="{{asset("admin/dashboard")}}">Dashboard</a>
                    <a href="{{asset("admin/bar-kitchen-docket")}}">Bar Kitchen Docket</a>
                    <a href="{{asset("admin/captin-order")}}">Captin Order</a>
                    <a href="{{asset("admin/reservation-billing")}}">Reservation Billing</a>
                    <a href="{{asset("admin/staff/create")}}">Create Staff</a>
                    <a href="{{asset("admin/change-password")}}">Change Password</a>
                    <a href="{{asset("admin/logout")}}">Logout</a>
                </div>
            </div>
            <div class="col-md-10 col-sm-12 col-xs-12 col-12">
                <div class="">
                    @yield('content')
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>