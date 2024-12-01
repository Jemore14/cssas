<?php

namespace App\Http\Controllers\Authenticated\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Office;
use App\Models\AuditTrail;

class SuperAdminOffice extends Controller
{
    public function officeList(Request $request){
        $offices = Office::all();
        return view('authenticated.superadmin.office.offices', [ 'offices' => $offices ]);
    }

    public function newOffice(Request $request){
        if($request->method() == "POST"){
            $validation_patterns = [
                'office_name' => 'required|string',
                'office_code' => 'required|string|unique:offices',
                'office_number' => 'required|string|numeric',
                'office_location' => 'required|string'
            ];

            $validator = \Validator::make($request->all(), $validation_patterns);

            if($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                try {
                    $new_office = new Office;
                    $new_office->office_name = $request->office_name;
                    $new_office->office_code = $request->office_code;
                    $new_office->office_ci = $request->office_number;
                    $new_office->office_location = $request->office_location;
                    $new_office->save();

                    $new_log = new AuditTrail;
                    $new_log->user_id = Auth::user()->id;
                    $new_log->audit_trail = "You've successfully created a new office. ID#" . $new_office->id;
                    $new_log->save();

                    return redirect()->back()->with('message', '<strong>Success!</strong> New Office has been created. ID#' . $new_office->id);
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('<strong>Oh no!</strong> Error occured: ' . $e->getMessage());
                }
            }
        }

        return view('authenticated.superadmin.office.create-office');
    }

    public function editOffice(Request $request, int $office_id){
        $this_office = Office::findorFail($office_id);
        
        if($request->method() == "POST"){
            $validation_patterns = [
                'office_name' => 'required|string',
                'office_code' => 'required|string|unique:offices,office_code,' . $this_office->office_code,
                'office_number' => 'required|string|numeric',
                'office_location' => 'required|string'
            ];

            $validator = \Validator::make($request->all(), $validation_patterns);

            if($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                try {
                    $this_office->office_name = $request->office_name;
                    $this_office->office_code = $request->office_code;
                    $this_office->office_ci = $request->office_number;
                    $this_office->office_location = $request->office_location;
                    $this_office->save();

                    $new_log = new AuditTrail;
                    $new_log->user_id = Auth::user()->id;
                    $new_log->audit_trail = "You've successfully updated office details of ID#" . $office_id;
                    $new_log->save();

                    return redirect()->back()->with('message', '<strong>Success!</strong> Office details has been successfully updated.');
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('<strong>Oh no!</strong> Error occured: ' . $e->getMessage());
                }
            }
        }

        return view('authenticated.superadmin.office.update-office', [
            'thisoffice' => $this_office
        ]);
    }

    public function removeOffice(Request $request, int $office_id){
        $this_office = Office::findorFail($office_id);

        try {
            if(!$this_office->is_office_in_use()->exists()){
                $this_office->delete();

                $new_log = new AuditTrail;
                $new_log->user_id = Auth::user()->id;
                $new_log->audit_trail = "You've successfully removed an Office ID#" . $office_id;
                $new_log->save();

                return redirect()->back()->with('message', '<strong>Success!</strong> Office ID# ' . $office_id . ' has been successfully removed.');
            } else {
                return redirect()->back()->withErrors('<strong>Oh no!</strong> Office is in use. Can\'t delete.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('<strong>Oh no!</strong> Error occured: ' . $e->getMessage());
        }
    }
}
