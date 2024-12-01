<?php

namespace App\Http\Controllers\Authenticated\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Office;
use App\Models\Survey;
use Carbon\Carbon;

class SuperAdminDashboard extends Controller
{
    public function dashboard(Request $request){
        $offices = Office::orderBy('office_name', 'ASC')->get();
        
        $year = $request->year ?? Carbon::now()->year;
        $month = $request->months ?? null;
        $quarter = $request->quarter ?? null;
        $office = $request->office ?? null;

        $quarters = [
            1 => [1, 2, 3],
            2 => [4, 5, 6],
            3 => [7, 8, 9],
            4 => [10, 11, 12]
        ];

        /**
         * for record1
         */
        $record1_base_query = Survey::query();

        if ($month && $month !== "All") $record1_base_query->whereMonth('created_at', $month);
        if ($year && $year !== "All") $record1_base_query->whereYear('created_at', $year);
        if ($office && $office !== "All" && Auth::user()->role == "SUPERADMIN") $record1_base_query->where('office_id', $office);
        if ($quarter && $quarter !== "All") $record1_base_query->whereIn(DB::raw('MONTH(created_at)'), $quarters[$quarter]);

        if(Auth::user()->role == "SUPERADMIN"){
            $records_for_record1 = $record1_base_query->get();
        } else {
            $records_for_record1 = $record1_base_query->where('office_id', Auth::user()->office_id)->get();
        }
        
        $record1ByMonth = array_fill(1, 13, 0);

        foreach ($records_for_record1 as $record) {
            $month = $record->created_at->month;
            $record1ByMonth[$month]++;
        }

        $answer_counts = array_fill(0, 18, []);

        $answer_counts[17] = [
            '0-17'   => 0,
            '18-24'  => 0,
            '25-34'  => 0,
            '35-44'  => 0,
            '45-54'  => 0,
            '55-64'  => 0,
            '65+'    => 0,
        ];

        foreach ($records_for_record1 as $record) {
            $client_type_category = $record->client_type_category;
            $sex = $record->sex;
            $gender = $record->gender;
            $region_of_residence = $record->region_of_residence;
            $cc1 = $record->cc1;
            $cc2 = $record->cc2;
            $cc3 = $record->cc3;
            $sqd0 = $record->sqd0;
            $sqd1 = $record->sqd1;
            $sqd2 = $record->sqd2;
            $sqd3 = $record->sqd3;
            $sqd4 = $record->sqd4;
            $sqd5 = $record->sqd5;
            $sqd6 = $record->sqd6;
            $sqd7 = $record->sqd7;
            $sqd8 = $record->sqd8;
            $service_unit = $record->service_unit;
            $age = $record->age;

            if ($client_type_category) {
                if (array_key_exists($client_type_category, $answer_counts[0])) {
                    $answer_counts[0][$client_type_category]++;
                } else {
                    $answer_counts[0][$client_type_category] = 1;
                }
            }

            if ($sex) {
                if (array_key_exists($sex, $answer_counts[1])) {
                    $answer_counts[1][$sex]++;
                } else {
                    $answer_counts[1][$sex] = 1;
                }
            }

            if ($gender) {
                if (array_key_exists($gender, $answer_counts[2])) {
                    $answer_counts[2][$gender]++;
                } else {
                    $answer_counts[2][$gender] = 1;
                }
            }

            if ($region_of_residence) {
                if (array_key_exists($region_of_residence, $answer_counts[3])) {
                    $answer_counts[3][$region_of_residence]++;
                } else {
                    $answer_counts[3][$region_of_residence] = 1;
                }
            }

            if ($cc1) {
                if (array_key_exists($cc1, $answer_counts[4])) {
                    $answer_counts[4][$cc1]++;
                } else {
                    $answer_counts[4][$cc1] = 1;
                }
            }

            if ($cc2) {
                if (array_key_exists($cc2, $answer_counts[5])) {
                    $answer_counts[5][$cc2]++;
                } else {
                    $answer_counts[5][$cc2] = 1;
                }
            }

            if ($cc3) {
                if (array_key_exists($cc3, $answer_counts[6])) {
                    $answer_counts[6][$cc3]++;
                } else {
                    $answer_counts[6][$cc3] = 1;
                }
            }

            if ($sqd0) {
                if (array_key_exists($sqd0, $answer_counts[7])) {
                    $answer_counts[7][$sqd0]++;
                } else {
                    $answer_counts[7][$sqd0] = 1;
                }
            }

            if ($sqd1) {
                if (array_key_exists($sqd1, $answer_counts[8])) {
                    $answer_counts[8][$sqd1]++;
                } else {
                    $answer_counts[8][$sqd1] = 1;
                }
            }

            if ($sqd2) {
                if (array_key_exists($sqd2, $answer_counts[9])) {
                    $answer_counts[9][$sqd2]++;
                } else {
                    $answer_counts[9][$sqd2] = 1;
                }
            }

            if ($sqd3) {
                if (array_key_exists($sqd3, $answer_counts[10])) {
                    $answer_counts[10][$sqd3]++;
                } else {
                    $answer_counts[10][$sqd3] = 1;
                }
            }

            if ($sqd4) {
                if (array_key_exists($sqd4, $answer_counts[11])) {
                    $answer_counts[11][$sqd4]++;
                } else {
                    $answer_counts[11][$sqd4] = 1;
                }
            }

            if ($sqd5) {
                if (array_key_exists($sqd5, $answer_counts[12])) {
                    $answer_counts[12][$sqd5]++;
                } else {
                    $answer_counts[12][$sqd5] = 1;
                }
            }

            if ($sqd6) {
                if (array_key_exists($sqd6, $answer_counts[13])) {
                    $answer_counts[13][$sqd6]++;
                } else {
                    $answer_counts[13][$sqd6] = 1;
                }
            }

            if ($sqd7) {
                if (array_key_exists($sqd7, $answer_counts[14])) {
                    $answer_counts[14][$sqd7]++;
                } else {
                    $answer_counts[14][$sqd7] = 1;
                }
            }

            if ($sqd8) {
                if (array_key_exists($sqd8, $answer_counts[15])) {
                    $answer_counts[15][$sqd8]++;
                } else {
                    $answer_counts[15][$sqd8] = 1;
                }
            }

            if ($service_unit) {
                if (array_key_exists($service_unit, $answer_counts[16])) {
                    $answer_counts[16][$service_unit]++;
                } else {
                    $answer_counts[16][$service_unit] = 1;
                }
            }

            if ($age) {
                if ($age <= 17) $answer_counts[17]['0-17']++;
                elseif ($age >= 18 && $age <= 24) $answer_counts[17]['18-24']++;
                elseif ($age >= 25 && $age <= 34) $answer_counts[17]['25-34']++;
                elseif ($age >= 35 && $age <= 44) $answer_counts[17]['35-44']++;
                elseif ($age >= 45 && $age <= 54) $answer_counts[17]['45-54']++;
                elseif ($age >= 55 && $age <= 64) $answer_counts[17]['55-64']++;
                else $answer_counts[17]['65+']++;
            }
        }

        return view(Auth::user()->role == "SUPERADMIN" 
            ? 'authenticated.superadmin.dashboard' 
            : 'authenticated.admin.dashboard',  [
                'offices' => $offices,
                'record1' => $record1ByMonth,
                'responses' => $records_for_record1,
                'answer_counts' => $answer_counts
            ]);
    }
}
