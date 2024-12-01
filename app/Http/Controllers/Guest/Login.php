<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AuditTrail;

class Login extends Controller
{
    public function login_user(Request $request) {
        if($request->method() === "POST") {
            $validation_patterns = [
                'email' => 'email|required|string',
                'password' => 'required|string'
            ];

            $validator = \Validator::make($request->all(), $validation_patterns);

            if($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                if(Auth::attempt($request->only('email', 'password'))){
                    if(Auth::user()->account_status == "active"){
                        $new_log = new AuditTrail;
                        $new_log->user_id = Auth::user()->id;
                        $new_log->audit_trail = "You've logged in to your account";
                        $new_log->save();

                        switch (Auth::user()->role) {
                            case "SUPERADMIN":
                                return redirect()->to('/welcome/superadmin/dashboard');
                                break;

                            case "Administrator":
                                return redirect()->to('/welcome/admin/dashboard');
                                break;
                        
                            default:
                                # code...
                                break;
                        }
                    } else {
                        return redirect()->back()->withErrors('<strong>Oops!</strong> You\'re account has been set to inactive.');
                    }
                } else {
                    return redirect()->back()->withErrors('<strong>Oh no!</strong> Invalid username or password');
                } 
            }
        }

        return view('welcome');
    }
}
