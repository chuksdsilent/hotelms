<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset("bootstrap/css/bootstrap.css")}}" rel="stylesheet" />

    <link href="{{asset("css/style.css")}}" rel="stylesheet" />

</head>
<body>
    <div class="receipt">
        <div class="header">
            <h3>MORREN-XRIS</h3>
            <div>SUITES & GARDEN</div>
            <div>..comfort & relaxation</div>
        </div>
        <div class="d-flex justify-content-center">
            <h6 style="text-decoration: underline">Captin Order</h6>
        </div>
        <div class="">
            {{-- <div>Room No: {{ $room_no}}</div>
            <div>Reference No: {{ $ref_no}}</div> --}}
            {{-- <div>Date: {{ \Carbon\Carbon::now()->format("d M, Y")}}</div> --}}
            <table class="table captin-order">
                <thead>
                    <tr>
                        <th>ROOM</th>
                        <th>TABLE NO</th>
                        <th>COVER</th>
                    </tr>
                    <tr>
                        <th>{{$room_no}}</th>
                        <th>{{$table_no}}</th>
                        <th>{{$cover}}</th>
                    </tr>
                    <tr>
                        <th>DATE</th>
                        <th colspan="2">TIME</th>
                    </tr>
                    <tr>
                        <th>{{\Carbon\Carbon::now()->format("d M, Y")}}</th>
                        <th colspan="2">{{$time}}</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="receipt-container">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>QTY</th>
                    <th>DESC</th>
                    <th>PRICE</th>
                    <th>AMOUNT</th>
                </thead>
                @foreach ($qty as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item}}</td>
                        <td>{{$desc[$key]}}</td>
                        <td>&#8358; {{number_format($unit_price[$key], 2)}}</td>
                        <td>&#8358; {{number_format($item * $unit_price[$key], 2)}}</td>
                    </tr>
                @endforeach
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>&#8358; {{number_format(\App\Models\CaptinOrder::where("serial_no", $serial_no)->sum("total"), 2)}}</td>
            </table>

        </div>
    </div>
    <a href="{{url("staff/captin-order")}}" class="create">Create New Captin Order</a>
</body>
</html>