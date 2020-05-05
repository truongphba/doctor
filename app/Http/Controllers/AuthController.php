<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Examination;
use App\Patient;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function postLogin(Request $request)
    {
        $username = $request['name'];
        $password = $request['password'];
        if (Auth::attempt(['name' => $username, 'password' => $password])) {
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
            return redirect()->back()->with('thongbao', 'Tên đăng nhập hoặc password không chính xác');
        }
    }

    public function postLoginAdmin(Request $request)
    {
        $username = $request['name'];
        $password = $request['password'];
        if (Auth::attempt(['name' => $username, 'password' => $password])) {
            $user = DB::table('users')->select('*')->where('users.id', '=', Auth::id())->first();
//            $doctor = DB::table('doctors')
//                ->join('users', 'doctors.id', '=', 'users.doctor_id')
//                ->select('doctors.*', 'users.doctor_id as doctor_id')
//                ->where('users.id', '=', Auth::id())
//                ->first();
//            $patient = DB::table('patients')
//                ->join('users', 'patients.id', '=', 'users.patient_id')
//                ->select('patients.*', 'users.patient_id as patient_id')
//                ->where('users.id', '=', Auth::id())
//                ->first();

            if ($user->is_admin) {
                return view('backend.index');
            } else {
                return view('error.401');
            }
        } else {
            return redirect()->back()->with('thongbao', 'Tên đăng nhập hoặc password không chính xác');
        }
    }
    public function register()
    {
        return view('frontend.register');
    }

    public function postRegister(Request $request)
    {
        $doctor = new Doctor();

        $doctor->name = $request->d_name;
        $doctor->email = $request->email;
        $doctor->votes = $request->votes;
        $doctor->wallet = $request->wallet;
        $doctor->specialist = $request->specialist;
        $doctor->skype = $request->skype;
        $image = $request->file('images');
        $input['imagename'] = time() . '_' . $image->getClientOriginalName();
        $doctor->images = '/uploads/' . $input['imagename'];
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['imagename']);
        $doctor->save();
        $user = new User();
        $user->doctor_id = $doctor->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('frontend.login');

    }

    public function postRegister_p(Request $request)
    {
        $patient = new Patient();

        $patient->name = $request->p_name;
        $patient->email = $request->email;
        $patient->wallet = $request->wallet;
        $patient->skype = $request->skype;
        $patient->address = $request->address;
        $patient->gender = $request->gender;
        $patient->birth = $request->birth;
        $image = $request->file('images');
        $input['imagename'] = time() . '_' . $image->getClientOriginalName();
        $patient->images = '/uploads/' . $input['imagename'];
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['imagename']);
        $patient->save();

        $user = new User();
        $user->patient_id = $patient->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('frontend.login');

    }

    public function logout()
    {
        $user = DB::table('users')->select('*')->where('users.id', '=', Auth::id())->first();

        if (!is_null($user->doctor_id)){
            $doctor = DB::table('doctors')
                ->join('users', 'doctors.id', '=', 'users.doctor_id')
                ->select('doctors.*', 'users.doctor_id as doctor_id')
                ->where('users.id', '=', Auth::id())
                ->first();
            $examination = Examination::where('doctor_id', $doctor->id)->first();
            if(!is_null($examination))
            $examination->delete();
        }
        Auth::logout();
        return \redirect()->route('frontend.index');
    }

    public function logoutAdmin()
    {
        $user = DB::table('users')->select('*')->where('users.id', '=', Auth::id())->first();
        Auth::logout();
        return \redirect()->route('admin.login');
    }
}
