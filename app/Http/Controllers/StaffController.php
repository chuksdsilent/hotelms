<?php

namespace App\Http\Controllers;

use App\Models\BarKitchenDocket;
use App\Models\CaptinOrder;
use App\Models\ReservationBilling;
use App\Models\Staff;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StaffController extends Controller
{
  
    public function captinOrder(){
        return view("staff.captinOrder");
    }
    public function reservationBilling (){
        return view("staff.billingReservation");
    }

    public function saveBarKitchenDocket(Request $request){
        $request->validate([
            "room_no" => "required",
            "ref_no" => "required",
            "cashier_name" => "required",
            "customer_name" => "required"
        ],[]);

            $amount_paid =  $request->get("amount");
            $unit_price =  $request->get("unit_price");
            $desc =  $request->get("desc");
            
            foreach($request->get("unit_price") as $key => $value){
                
                $bal = $value -  $request->get("amount_paid");
                $barKitchenDocket = new BarKitchenDocket();
                $barKitchenDocket->ref_no = $request->get("ref_no");
                $barKitchenDocket->room_no = $request->get("room_no");
                $barKitchenDocket->customer_name = $request->get("customer_name");
                $barKitchenDocket->cashier_name = $request->get("cashier_name");
                $barKitchenDocket->desc = $desc[$key];
                $barKitchenDocket->amount_paid = $amount_paid[$key];
                $barKitchenDocket->unit_price = $unit_price[$key];
                $barKitchenDocket->user_id =  Auth::id();
                $barKitchenDocket->bal = $bal;
                $barKitchenDocket->save();

            }
            
            if($barKitchenDocket) {
                return view("staff.bar_receipt")
                    ->with("ref_no", $request->get("ref_no"))
                    ->with("room_no", $request->get("room_no"))
                    ->with("cashier_name", $request->get("cashier_name"))
                    ->with("desc", $request->get("desc"))
                    ->with("unit_price", $request->get("unit_price"))
                    ->with("amount_paid", $request->get("amount"))
                    ->with("customer_name", $request->get("customer_name"));

            }
            // return "unsuccessul";
    }
    public function saveCaptinOrder(Request $request){
        $request->validate([
            "order_from" => "required",
            "room_no" => "required",
            "table_no" => "required",
            "unit_price" => "required",
            "name_of_waitress" => "required",
        ],[]);

            $request->request->add(["user_id" =>  Auth::id()]);

            $serial_no = CaptinOrder::count() + 1;
            if($serial_no <= 10)
                $serial_no = "00" . $serial_no;
            elseif($serial_no <= 100)
                $serial_no = "0" . $serial_no;
                
            $request->request->add(["serial_no" => $serial_no]);

            $unit_price = $request->get("unit_price");
            $desc = $request->get("desc");
            // dd($request->get("qty"));
            foreach($request->get("qty") as $key => $value){
                
                $captinOrder = new CaptinOrder();
                $captinOrder->serial_no = $serial_no;
                $captinOrder->order_from = $request->get("order_from");
                $captinOrder->time = $request->get("time");
                $captinOrder->qty = $value;
                $captinOrder->unit_price = $unit_price[$key];
                $captinOrder->desc = $desc[$key];
                $captinOrder->total = $unit_price[$key] * $value;
                $captinOrder->room_no = $request->get("room_no");
                $captinOrder->cover = $request->get("cover");
                $captinOrder->user_id = Auth::id();
                $captinOrder->name_of_waitress = $request->get("name_of_waitress");
                $captinOrder->table_no = $request->get("table_no");
                $captinOrder->save();
            }
            
            
            if($captinOrder) {
                return view("staff.captin_receipt")
                        ->with("serial_no", $serial_no)
                        ->with("time",  $request->get("time"))
                        ->with("qty",  $request->get("qty"))
                        ->with("desc",  $request->get("desc"))
                        ->with("unit_price",  $request->get("unit_price"))
                        ->with("room_no",  $request->get("room_no"))
                        ->with("cover",  $request->get("cover"))
                        ->with("table_no",  $request->get("table_no"))
                        ->with("name_of_waitress",  $request->get("name_of_waitress"))
                        ->with("order_from",  $request->get("order_from"));
            }
            return "unsuccessul";
    }

    public function saveReservationBilling(Request $request){
        $request->validate([
            "class_of_room" => "required",
            "room_number" => "required",
            "customer_name" => "required",
            "customer_address" => "required",
            "phone" => "required",
            "occupation" => "required",
            "amount_paid" => "required",
            "check_in_time" => "required",
            "check_out_time" => "required",
            "check_out_date" => "required",
        ],[]);

            $request->request->add(["user_id" =>  Auth::id()]);
            $rb_id = Str::random(20);
            $request->request->add(["rb_id" => $rb_id]);
            $registered = ReservationBilling::create($request->except(["_token"]));
            if($registered) {
                return view("staff.bill_receipt")
                        ->with("class_of_room", $request->get("class_of_room"))
                        ->with("amount_paid_words", $request->get("amount_paid_words"))
                        ->with("room_number", $request->get("room_number"))
                        ->with("customer_name", $request->get("customer_name"))
                        ->with("amount_paid", $request->get("amount_paid"))
                        ->with("check_in_time", $request->get("check_in_time"))
                        ->with("check_out_time", $request->get("check_out_time"))
                        ->with("check_in_date", $request->get("check_in_date"))
                        ->with("check_out_date", $request->get("check_out_date"))
                        ->with("amount_paid", $request->get("amount_paid"))
                        ->with("room_no", $request->get("room_no"))
                        ->with("amount_word_paid", $request->get("amount_word_paid"));

            }
            return "unsuccessul";
    }
}
