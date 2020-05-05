<?php

use App\Examination;
use App\Record;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Doctor;
use App\Location;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        $user = DB::table('users')->select('*')->where('users.id', '=', Auth::id())->first();
        $doctor = DB::table('doctors')
            ->join('users', 'doctors.id', '=', 'users.doctor_id')
            ->select('doctors.*', 'users.doctor_id as doctor_id')
            ->where('users.id', '=', Auth::id())
            ->first();
        $patient = DB::table('patients')
            ->join('users', 'patients.id', '=', 'users.patient_id')
            ->select('patients.*', 'users.patient_id as patient_id')
            ->where('users.id', '=', Auth::id())
            ->first();
        if (!is_null($user->doctor_id)) {
            return view('frontend.doctor-index', [
                'doctor' => $doctor
            ]);
        } else if (!is_null($user->patient_id)) {
            return view('frontend.index', [
                'patient' => $patient
            ]);
        }
    } else {
        return view('frontend.index');
    }
})->name('frontend.index');
Route::get('/admin', function () {
    if (Auth::check()) {
        $user = DB::table('users')->select('*')->where('users.id', '=', Auth::id())->first();
//        $doctor = DB::table('doctors')
//            ->join('users', 'doctors.id', '=', 'users.doctor_id')
//            ->select('doctors.*', 'users.doctor_id as doctor_id')
//            ->where('users.id', '=', Auth::id())
//            ->first();
//        $patient = DB::table('patients')
//            ->join('users', 'patients.id', '=', 'users.patient_id')
//            ->select('patients.*', 'users.patient_id as patient_id')
//            ->where('users.id', '=', Auth::id())
//            ->first();
        if ($user->is_admin) {
            return view('backend.index');
        } else {
            return view('error.401');
        }
    } else {
        return redirect()->route('admin.login');
    }

})->name('admin');
Route::get('/admin/login', function () {
    return view('backend.login');
})->name('admin.login');
Route::resources([
    'locations' => 'LocationController',
    'symptoms' => 'SymptomController',
    'doctors' => 'DoctorController',
    'patients' => 'PatientController',
    'appointments' => 'AppointmentController',
    'records' => 'RecordController',
    'examinations' => 'ExaminationController'
]);
Route::post('examination', 'ExaminationController@find')->name('examinations.find');
Route::delete('examination', 'ExaminationController@destroyDoctor')->name('examinations.destroyDoctor');
Route::get('login', 'AuthController@login')->name('frontend.login');
Route::post('login', 'AuthController@postLogin')->name('frontend.login.post');
Route::post('admin/login', 'AuthController@postLoginAdmin')->name('backend.login.post');
Route::get('register', 'AuthController@register')->name('frontend.register');
Route::post('register', 'AuthController@postRegister')->name('frontend.register.post');
Route::post('register_p', 'AuthController@postRegister_p')->name('frontend.register.post_p');
Route::get('logout', 'AuthController@logout')->name('frontend.logout');
Route::get('admin/logout', 'AuthController@logoutAdmin')->name('backend.logout');

Route::get('/suggest', function () {
    if (Auth::check()) {
        $patient = DB::table('patients')
            ->join('users', 'patients.id', '=', 'users.patient_id')
            ->select('patients.*', 'users.patient_id as patient_id')
            ->where('users.id', '=', Auth::id())
            ->first();
        if ($patient->wallet < 3) {
            return redirect()->back()->with('thongbao', 'Số dư không đủ để thực hiện');
        } else {
            $heads = DB::table('symptoms')
                ->join('locations', 'symptoms.location_id', '=', 'locations.id')
                ->select('symptoms.*', 'locations.name as location_name')
                ->where('location_id', 1)
                ->get();
            $headLocal = $heads->take(1)->first();
            $eyes = DB::table('symptoms')
                ->join('locations', 'symptoms.location_id', '=', 'locations.id')
                ->select('symptoms.*', 'locations.name as location_name')
                ->where('location_id', 6)
                ->get();
            $eyeLocal = $eyes->take(1)->first();
            $noses = DB::table('symptoms')
                ->join('locations', 'symptoms.location_id', '=', 'locations.id')
                ->select('symptoms.*', 'locations.name as location_name')
                ->where('location_id', 5)
                ->get();
            $noseLocal = $noses->take(1)->first();
            $ears = DB::table('symptoms')
                ->join('locations', 'symptoms.location_id', '=', 'locations.id')
                ->select('symptoms.*', 'locations.name as location_name')
                ->where('location_id', 2)
                ->get();
            $earLocal = $ears->take(1)->first();
            $oralCavitys = DB::table('symptoms')
                ->join('locations', 'symptoms.location_id', '=', 'locations.id')
                ->select('symptoms.*', 'locations.name as location_name')
                ->where('location_id', 11)
                ->get();
            $oralCavityLocal = $oralCavitys->take(1)->first();
            $necks = DB::table('symptoms')
                ->join('locations', 'symptoms.location_id', '=', 'locations.id')
                ->select('symptoms.*', 'locations.name as location_name')
                ->where('location_id', 8)
                ->get();
            $neckLocal = $necks->take(1)->first();
            $chests = DB::table('symptoms')
                ->join('locations', 'symptoms.location_id', '=', 'locations.id')
                ->select('symptoms.*', 'locations.name as location_name')
                ->where('location_id', 3)
                ->get();
            $chestLocal = $chests->take(1)->first();
            return view('frontend.suggest', [
                'patient' => $patient,
                'heads' => $heads,
                'headLocal' => $headLocal,
                'eyes' => $eyes,
                'eyeLocal' => $eyeLocal,
                'noses' => $noses,
                'noseLocal' => $noseLocal,
                'ears' => $ears,
                'earLocal' => $earLocal,
                'oralCavitys' => $oralCavitys,
                'oralCavityLocal' => $oralCavityLocal,
                'necks' => $necks,
                'neckLocal' => $neckLocal,
                'chests' => $chests,
                'chestLocal' => $chestLocal
            ]);
        }
    }

})->name('frontend.suggest');

Route::get('/processing', function () {
    if (Auth::check()) {
        $patient = DB::table('patients')
            ->join('users', 'patients.id', '=', 'users.patient_id')
            ->select('patients.*', 'users.patient_id as patient_id')
            ->where('users.id', '=', Auth::id())
            ->first();
        $record = Record::where('patient_id', $patient->id)->first();
        $examination = Examination::where('patient_id', null)->first();
        return view('frontend.processing', [
            'patient' => $patient,
            'record' => $record,
            'examination' => $examination
        ]);

    } else {
        return redirect()->route('frontend.login');
    }
})->name('frontend.processing');

Route::get('get-examination', 'ExaminationController@getExamination')->name('frontend.getExamination');
Route::post('get-examination', 'ExaminationController@posttExamination')->name('frontend.postExamination');
Route::get('medical', function () {
    if (Auth::check()) {
        $patient = DB::table('patients')
            ->join('users', 'patients.id', '=', 'users.patient_id')
            ->select('patients.*', 'users.patient_id as patient_id')
            ->where('users.id', '=', Auth::id())
            ->first();

        $records = Record::where('patient_id', $patient->id)->orderBy('created_at', 'desc')->get();
        return view('frontend.medical', [
            'patient' => $patient,
            'records' => $records
        ]);
    }
})->name('frontend.medical');
Route::get('recharge', function () {
    if (Auth::check()) {
        $patient = DB::table('patients')
            ->join('users', 'patients.id', '=', 'users.patient_id')
            ->select('patients.*', 'users.patient_id as patient_id')
            ->where('users.id', '=', Auth::id())
            ->first();
        return view('frontend.recharge', [
            'patient' => $patient
        ]);
    }
})->name('frontend.recharge');
Route::post('recharge', function (Request $request) {
    if (Auth::check()) {
        $patient = DB::table('patients')
            ->join('users', 'patients.id', '=', 'users.patient_id')
            ->select('patients.*', 'users.patient_id as patient_id')
            ->where('users.id', '=', Auth::id())
            ->first();
        $current_wallet = $patient->wallet;
        $wallet = $current_wallet + $request->wallet;
        $patient->wallet = $wallet;
        $patient->save();

        return redirect()->route('frontend.index');
    }
})->name('frontend.pRecharge');
