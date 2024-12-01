<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Survey;

class AnswerTheSurvey extends Controller
{
    public function answer_this_survey(Request $request){
        $offices = Office::orderBy('office_name', 'ASC')->get();

        if($request->method() == "POST"){
            $validation_patterns = [
                'ctc' => 'required|string',
                'sex' => 'required|string',
                'gender' => 'required|string',
                'age' => 'required|numeric',
                'region_of_residence' => 'required|string',
                'cc1' => 'required|string',
                'cc2' => 'required|string',
                'cc3' => 'required|string',
                'sqd0' => 'required|string',
                'sqd1' => 'required|string',
                'sqd2' => 'required|string',
                'sqd3' => 'required|string',
                'sqd4' => 'required|string',
                'sqd5' => 'required|string',
                'sqd6' => 'required|string',
                'sqd7' => 'required|string',
                'sqd8' => 'required|string',
                'service_unit' => 'required|string',
                'office' => 'required'
            ];

            $validator = \Validator::make($request->all(), $validation_patterns);

            if($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                try {
                    $new_surver = new Survey;
                    $new_surver->client_type_category = $request->ctc;
                    $new_surver->sex = $request->sex;
                    $new_surver->gender = $request->gender;
                    $new_surver->age = $request->age;
                    $new_surver->region_of_residence = $request->region_of_residence;
                    $new_surver->cc1 = $request->cc1;
                    $new_surver->cc2 = $request->cc2;
                    $new_surver->cc3 = $request->cc3;
                    $new_surver->sqd0 = $request->sqd0;
                    $new_surver->sqd1 = $request->sqd1;
                    $new_surver->sqd2 = $request->sqd2;
                    $new_surver->sqd3 = $request->sqd3;
                    $new_surver->sqd4 = $request->sqd4;
                    $new_surver->sqd5 = $request->sqd5;
                    $new_surver->sqd6 = $request->sqd6;
                    $new_surver->sqd7 = $request->sqd7;
                    $new_surver->sqd8 = $request->sqd8;
                    $new_surver->suggestions = $request->suggestions;
                    $new_surver->service_unit = $request->service_unit;
                    $new_surver->office_id = $request->office;
                    $new_surver->save();

                    return redirect()->back()->with('message', '<strong>Success!</strong> Your response has been submitted.');
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('<strong>Oh no!</strong> Error occured: ' . $e->getMessage());
                }
            }
        }

        return view('survey', [
            'offices' => $offices
        ]);
    }
}
