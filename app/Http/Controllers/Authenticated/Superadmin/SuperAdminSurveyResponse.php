<?php

namespace App\Http\Controllers\Authenticated\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Survey;

class SuperAdminSurveyResponse extends Controller
{
    public function survey_responses (Request $request){
        $responses = Survey::where('office_id', Auth::user()->role == "SUPERADMIN" ? '' : Auth::user()->office_id)->orderBy('created_at', 'DESC')->get();

        return view(Auth::user()->role == "SUPERADMIN" 
            ? 'authenticated.superadmin.survey-response.responses' 
            : 'authenticated.admin.survey-response.responses', [
                'responses' => $responses
            ]);
    }

    public function survey_response (Request $request, int $survey_id){
        $response = Survey::findOrFail($survey_id);

        return view(Auth::user()->role == "SUPERADMIN" 
            ? 'authenticated.superadmin.survey-response.view' 
            : 'authenticated.admin.survey-response.view', [
                'response' => $response
            ]);
    }
}
