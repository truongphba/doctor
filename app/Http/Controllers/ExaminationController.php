<?php

namespace App\Http\Controllers;

use App\Examination;
use App\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function getExamination()
    {
        if (Auth::check()) {
            $user = DB::table('users')->select('*')->where('users.id', '=', Auth::id())->first();
            $doctor = DB::table('doctors')
                ->join('users', 'doctors.id', '=', 'users.doctor_id')
                ->select('doctors.*', 'users.doctor_id as doctor_id')
                ->where('users.id', '=', Auth::id())
                ->first();

            if (!is_null($user->doctor_id)) {
                $patient = DB::table('examinations')
                    ->join('patients', 'patients.id', '=', 'examinations.patient_id')
                    ->select('patients.*', 'examinations.*')
                    ->where('examinations.doctor_id', '=',$user->doctor_id)
                    ->first();
                $records = Record::where('patient_id',$patient->patient_id)->get();
                return view('frontend.examination', [
                    'doctor' => $doctor,
                    'patient' => $patient,
                    'records' => $records
                ]);
            } else {
                return view('error.401');
            }
        } else {
            return redirect()->route('frontend.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $examination = new Examination();
        $examination->doctor_id = $request->doctor_id;
        $examination->save();

        return redirect()->route('frontend.index');
    }


    public function find(Request $request)
    {
        $examination = Examination::where('patient_id', '=', null)->orderBy('created_at', 'desc')->take(1)->first();
        $examination->patient_id = $request->patient_id;
        $examination->save();

        return redirect()->route('frontend.processing');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Examination $examination
     * @return \Illuminate\Http\Response
     */
    public function show(Examination $examination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Examination $examination
     * @return \Illuminate\Http\Response
     */
    public function edit(Examination $examination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Examination $examination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examination $examination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Examination $examination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examination $examination)
    {
        //
    }

    public function destroyDoctor()
    {
        $doctor = DB::table('doctors')
            ->join('users', 'doctors.id', '=', 'users.doctor_id')
            ->select('doctors.*', 'users.doctor_id as doctor_id')
            ->where('users.id', '=', Auth::id())
            ->first();
        $examination = Examination::where('doctor_id', $doctor->id)->first();
        $examination->delete();
        return redirect()->route('frontend.index');
    }
}
