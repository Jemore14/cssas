<?php

namespace App\Http\Controllers\Authenticated;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

# models
use App\Models\AuditTrail;
use App\Models\User;

class MyAccount extends Controller
{
    public function my_account(Request $request){
        $account = User::findorFail(Auth::user()->id);

        if($request->method() == "POST"){
            $validation_patterns = [
                'firstname' => 'required|string',
                'middlename' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'email|required|string|unique:users,email,' . Auth::user()->id,
            ];

            $validator = \Validator::make($request->all(), $validation_patterns);

            if($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                try {
                    $account->firstname = $request->firstname;
                    $account->middlename = $request->middlename;
                    $account->lastname = $request->lastname;
                    $account->suffix = $request->suffix;
                    $account->email = $request->email;

                    if($request->password){
                        $account->password = bcrypt($request->password);
                    }

                    if ($request->file('avatar')){
                        if(File::exists(public_path('user-images') . '/' . $account->profile_picture) && $account->profile_picture !== "avatar.png"){
                            File::delete(public_path('user-images') . '/' . $account->profile_picture);
                        }

                        $avatar = $request->file('avatar');
                        $newFileName = time() . '-' . uniqid() . '-' . 'user-image.' . $avatar->getClientOriginalExtension();
                        $avatar->move(public_path('user-images'), $newFileName);

                        $account->profile_picture = $newFileName;
                    }

                    
                    $account->save();

                    $new_log = new AuditTrail;
                    $new_log->user_id = Auth::user()->id;
                    $new_log->audit_trail = "You've successfully updates your account details";
                    $new_log->save();

                    return redirect()->back()->with('message', '<strong>Success!</strong> Your account details has been successfully updated.');
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('<strong>Oh no!</strong> Error occured: ' . $e->getMessage());
                }
            }
        }

        return view(Auth::user()->role == "SUPERADMIN" 
            ? 'authenticated.superadmin.my-account' 
            : 'authenticated.admin.my-account', 
        [ 'myaccount' => $account ]);
    }
}
