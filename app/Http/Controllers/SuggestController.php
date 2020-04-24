<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Location;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SuggestController extends Controller
{
    public function getLocation(Location $location)
    {
        if (Auth::check()) {
            $patient = DB::table('patients')
                ->join('users', 'patients.id', '=', 'users.patient_id')
                ->select('patients.*', 'users.patient_id as patient_id')
                ->where('users.id', '=', Auth::id())
                ->first();
            $location = Location::find($location)->first();
            return view('frontend.suggest', [
                'patient' => $patient,
                'location' => $location
            ]);
        }
    }
}
