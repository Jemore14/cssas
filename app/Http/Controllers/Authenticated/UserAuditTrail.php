<?php

namespace App\Http\Controllers\Authenticated;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AuditTrail;

class UserAuditTrail extends Controller
{
    public function log(Request $request){
        $histories = AuditTrail::where('user_id', Auth::user()->role == "SUPERADMIN" 
            ? '>=' 
            : '=', 
        Auth::user()->id)->orderBy('created_at', 'DESC')->get();
   
        return view(Auth::user()->role == "SUPERADMIN" 
            ? 'authenticated.superadmin.account-history' 
            : 'authenticated.admin.account-history',
        [ 'histories' => $histories ]);
    }
}
