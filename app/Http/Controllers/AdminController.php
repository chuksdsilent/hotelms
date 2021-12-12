<?php

namespace App\Http\Controllers;

use App\Models\BarKitchenDocket;
use App\Models\CaptinOrder;
use App\Models\ReservationBilling;
use App\Models\Staff;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function dashboard(){
        return view("admin.dashboard");
    }
    public function viewBarKitchenDocket($id){
        
        return view("admin.viewBarKitchenDocket")->with("data", BarKitchenDocket::find($id));
    }
    public function viewCaptinOrder($id){
        return view("admin.viewCaptinOrder")->with("data", CaptinOrder::find($id));
    }
    public function viewReservationBilling($id){
        return view("admin.viewReservationBilling")->with("data", ReservationBilling::find($id));
    }
    public function activateStaff($id){
        
        $status = User::where("username", $id)->value("activate");
        $status = !$status;
        User::where("username",$id)->update(["activate" => $status]);
        Staff::where("username",$id)->update(["activate" => $status]);

        if($status == 1)
            return redirect()->back()->with("msg", "Activated Successfully");
        else
            return redirect()->back()->with("msg", "Dectivated Successfully");

    }
    public function staffs(){
        $data = Staff::orderBy("created_at", "DESC")->get();
        return view("admin.staffs")->with("data", $data);
    }
    public function createStaff(){
        
        return view("admin.createStaff");
    }
    public function saveCreateStaff(Request $request){
        $request->validate([
            "username" => "required",
            "name" => "required",
            "phone" => "required",
            "address" => "required",
        ],[]);

        $request->request->add(["activate" => 1]);
        $request->request->add(["user_id" =>  Auth::id()]);
        Staff::create($request->except(["_token"]));
        
        $user = new User();
        $user->username = $request->get("username");
        $user->password = Hash::make("123456");
        $user->role = 2;
        $user->activate = 1;
        $user->save();


        return redirect('admin/staffs');
        
    }
    public function barKitchenDocket(Request $request){
        
        if($request->get("param") == "today"){
            $dt = Carbon::now()->toDateString();
            $data = BarKitchenDocket::orderBy("created_at", "DESC")->whereDate('created_at', '=',$dt)->get();
            $total = BarKitchenDocket::orderBy("created_at", "DESC")->whereDate('created_at', '=',$dt)->sum("amount_paid");
        }else{
            $data = BarKitchenDocket::orderBy("created_at", "DESC")->get();
            $total = BarKitchenDocket::orderBy("created_at", "DESC")->sum("amount_paid");
        }
        return view("admin.bar_kitchen_docket")
                ->with("barKitchenDocket", $data)->with("total", $total);
    }

    public function captinOrder(Request $request){
        
        if($request->get("param") == "today"){
            $dt = Carbon::now()->toDateString();
            $data = CaptinOrder::orderBy("created_at", "DESC")->whereDate('created_at', '=',$dt)->get();
            $total = CaptinOrder::orderBy("created_at", "DESC")->whereDate('created_at', '=',$dt)->sum("amount");
        }else{
            $data = CaptinOrder::orderBy("created_at", "DESC")->get();
            $total = CaptinOrder::orderBy("created_at", "DESC")->sum("amount");
        }
        return view("admin.captinOrder")
                ->with("captinOrder", $data)->with("total", $total);
    }
    public function reservationBilling(Request $request){
        
        if($request->get("param") == "today"){
            $dt = Carbon::now()->toDateString();
            $data = ReservationBilling::orderBy("created_at", "DESC")->whereDate('created_at', '=',$dt)->get();
            $total = ReservationBilling::orderBy("created_at", "DESC")->whereDate('created_at', '=',$dt)->sum("amount_paid");
        }else{
            $data = ReservationBilling::orderBy("created_at", "DESC")->get();
            $total = ReservationBilling::orderBy("created_at", "DESC")->sum("amount_paid");
        }
        return view("admin.reservationBilling ")
                ->with("reservationBilling",$data)->with("total", $total);
    }

}
