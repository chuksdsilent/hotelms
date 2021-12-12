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
            <h4>Bar Kitchen Docket</h4>
        </div>
        <div class="room">
            <div>Room No: {{ $room_no}}</div>
            <div>Reference No: {{ $ref_no}}</div>
            <div>Date: {{ \Carbon\Carbon::now()->format("d M, Y")}}</div>
        </div>

        <div class="receipt-container">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>DESCRIPTION</th>
                    <th>UNIT PRICE</th>
                    <th>AMOUNT</th>
                </thead>
                @foreach ($amount_paid as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$desc[$key]}}</td>
                        <td>{{number_format($unit_price[$key])}}</td>
                        <td>&#8358;{{number_format($item, 2)}}</td>
                    </tr>
                @endforeach
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td>&#8358; {{number_format(array_sum($amount_paid), 2)}}</td>
            </table>

        </div>
    </div>
    <div class="no-print">
        <a href="{{url("staff/dashboard")}}">Create new Bar Kitchen Docket</a>
        <button onclick="window.print()">Print</button>
    </div>
    
</body>
</html>