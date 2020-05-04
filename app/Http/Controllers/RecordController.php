<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Examination;
use App\Patient;
use App\Record;
use App\Revenue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = DB::table('records')
            ->join('doctors', 'records.doctor_id', '=', 'doctors.id')
            ->join('patients', 'records.patient_id', '=', 'patients.id')
            ->select('records.*', 'doctors.name as doctor_name', 'patients.name as patient_name')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('backend.quan_tri_don_thuoc', [
            'records' => $records
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $record = new Record();
        $record->doctor_id = $request->doctor_id;
        $record->patient_id = $request->patient_id;
        $record->symptom = $request->symptom;
        $record->diagnosis = $request->diagnosis;
        $record->medicine = $request->medicine;
        $record->amount = $request->amount;
        $record->using = $request->using;
        $record->save();
        $examination = Examination::where('doctor_id', $request->doctor_id)->first();
        $examination->patient_id = null;
        $examination->save();

        Doctor::where('id', $request->doctor_id)->limit(1)->increment('wallet',2);
        Patient::where('id', $request->patient_id)->limit(1)->decrement('wallet',3);

        $revenue = new Revenue();
        $revenue->revenue = 1;
        $revenue->save();

        return redirect()->route('frontend.index');

    }
    /**
     * Display the specified resource.
     *
     * @param \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Record $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        Record::find($record)->first()->delete();

        return redirect()->route('records.index');
    }
}
