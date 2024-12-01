<?php

namespace App\Http\Controllers\Authenticated\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

# models
use App\Models\AuditTrail;
use App\Models\User;
use App\Models\Office;

# mailer
use App\Mail\NewUser;
use App\Mail\UpdateUserPassword;

class SuperAdminUser extends Controller
{
    public function userList(Request $request){
        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('authenticated.superadmin.user.users', [ 'users' => $users ]);
    }

    public function newUser(Request $request){
        $offices = Office::orderBy('office_name', 'ASC')->get();

        if($request->method() == "POST"){
            $validation_patterns = [
                'firstname' => 'required|string',
                'middlename' => 'required|string',
                'lastname' => 'required|string',
                'office' => 'required',
                'role' => 'required',
                'email' => 'email|required|string|unique:users'
            ];

            $validator = \Validator::make($request->all(), $validation_patterns);

            if($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                try {
                    $random_password = uniqid();

                    $new_user = new User;
                    $new_user->firstname = $request->firstname;
                    $new_user->middlename = $request->middlename;
                    $new_user->lastname = $request->lastname;
                    $new_user->suffix = $request->suffix;
                    $new_user->email = $request->email;
                    $new_user->password = bcrypt($random_password);
                    $new_user->role = $request->role;
                    $new_user->office_id = $request->office;
                    $new_user->profile_picture = "avatar.png";
                    $new_user->save();

                    $new_log = new AuditTrail;
                    $new_log->user_id = Auth::user()->id;
                    $new_log->audit_trail = "You've successfully created a new user. ID#" . $new_user->id;
                    $new_log->save();

                    \Mail::to($request->email)->send(new NewUser(['password' => $random_password, 'role' => $request->role]));

                    return redirect()->back()->with('message', '<strong>Success!</strong> New User has been created. ID#' . $new_user->id);
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('<strong>Oh no!</strong> Error occured: ' . $e->getMessage());
                }
            }
        }

        return view('authenticated.superadmin.user.create-user', [
            'offices' => $offices
        ]);
    }

    public function editUser(Request $request, int $user_id){
        $this_user = User::findorFail($user_id);
        $office = Office::orderBy('office_name', 'ASC')->get();

        if($request->method() == "POST"){
            $validation_patterns = [
                'firstname' => 'required|string',
                'middlename' => 'required|string',
                'lastname' => 'required|string',
                'role' => 'required|string',
                'office' => 'required',
                'account_status' => 'required',
                'email' => 'email|required|string|unique:users,email,' . $user_id,
            ];

            $validator = \Validator::make($request->all(), $validation_patterns);

            if($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                try {
                    $this_user->firstname = $request->firstname;
                    $this_user->middlename = $request->middlename;
                    $this_user->lastname = $request->lastname;
                    $this_user->suffix = $request->suffix;
                    $this_user->email = $request->email;
                    $this_user->account_status = $request->account_status;
                    $this_user->office_id = $request->office;
                    $this_user->role = $request->role;

                    if($request->password){
                        $this_user->password = bcrypt($request->password);
                        \Mail::to($request->email)->send(new UpdateUserPassword(['password' => $request->password, 'role' => $request->role]));
                    }

                    if ($request->file('avatar')){
                        if(File::exists(public_path('user-images') . '/' . $this_user->profile_picture) && $this_user->profile_picture !== 'avatar.png'){
                            File::delete(public_path('user-images') . '/' . $this_user->profile_picture);
                        }

                        $avatar = $request->file('avatar');
                        $newFileName = time() . '-' . uniqid() . '-' . 'user-image.' . $avatar->getClientOriginalExtension();
                        $avatar->move(public_path('user-images'), $newFileName);

                        $this_user->profile_picture = $newFileName;
                    }

                    
                    $this_user->save();

                    $new_log = new AuditTrail;
                    $new_log->user_id = Auth::user()->id;
                    $new_log->audit_trail = "You've successfully updated user details of ID#" . $user_id;
                    $new_log->save();

                    return redirect()->back()->with('message', '<strong>Success!</strong> User details has been successfully updated.');
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('<strong>Oh no!</strong> Error occured: ' . $e->getMessage());
                }
            }
        }

        return view('authenticated.superadmin.user.update', [
            'thisuser' => $this_user,
            'offices' => $office
        ]);
    }

    public function removeUser(Request $request, int $user_id){
        $this_user = User::findorFail($user_id);

        try {
            if(File::exists(public_path('user-images') . '/' . $this_user->profile_picture) && $this_user->profile_picture !== "avatar.png"){
                File::delete(public_path('user-images') . '/' . $this_user->profile_picture);
            }

            $this_user->delete();

            $new_log = new AuditTrail;
            $new_log->user_id = Auth::user()->id;
            $new_log->audit_trail = "You've successfully removed a User ID#" . $user_id;
            $new_log->save();

            return redirect()->back()->with('message', '<strong>Success!</strong> User ID# ' . $user_id . ' has been successfully removed.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('<strong>Oh no!</strong> Error occured: ' . $e->getMessage());
        }
    }
}
