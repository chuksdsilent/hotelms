<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){

        $request->validate([
            "username" => "required",
            "password" => "required"
        ]);
        $loginCredentials = ["username" => $request->get("username"), "password" => $request->get("password")];
        // try{
            if(Auth::attempt($loginCredentials)){

                return response()->json([
                    'success' => true,
                    'data' =>$request->user(),
                    'message' => 'Login Successful'
                ], Response::HTTP_OK);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid Credentials'
                ], Response::HTTP_OK);
            }
        // } catch (\Throwable $th) {
        //     return response()->json(['error' => $th->get], Response::HTTP_BAD_REQUEST);
        // }
    }

    public function dashboard(){
        return view("staff.bar_kitchen_docket");
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function adminLogout(){
        Auth::logout();
        return redirect('/admin');
    }

    public function changePassword(){
        return view("admin.changePassword");
    }

    public function saveChangePassword(Request $request){

        $request->validate([
            "password" => "required",
            'new_password' => 'required',
            'new_confirm_password' => 'required|same:new_password'
        ],[]);

        if(Hash::check($request->get("password"),Auth::user()->password)){
            User::where("id", Auth::id())->update(["password" => Hash::make("password")]);
        }else{
            return redirect()->back()->with("msg", "Password does not match database password");
        }
        return redirect()->back()->with("msg", "Password updated successfully.");
        
    }
}
