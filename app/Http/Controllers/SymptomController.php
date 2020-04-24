<?php

namespace App\Http\Controllers;

use App\Location;
use App\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptoms = DB::table('symptoms')
            ->join('locations', 'symptoms.location_id', '=', 'locations.id')
            ->select('symptoms.*', 'locations.name as location_name')
            ->orderBy('created_at','desc')
            ->get();
        return view('backend.quan_tri_trieu_chung',[
            'symptoms' => $symptoms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::get();
        return view('backend.them_moi_trieu_chung',[
            'locations' => $locations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $symptom = new Symptom;
        $symptom->location_id = $request->location_id;
        $symptom->name = $request->name;
        $symptom->save();

        return  redirect()->route('symptoms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Symptom  $symptom
     * @return \Illuminate\Http\Response
     */
    public function show(Symptom $symptom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Symptom  $symptom
     * @return \Illuminate\Http\Response
     */
    public function edit(Symptom $symptom)
    {
        $locations = Location::get();
        $symptom = Symptom::find($symptom)->first();

        return view('backend.sua_trieu_chung',[
            'symptom' => $symptom,
            'locations' => $locations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Symptom  $symptom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Symptom $symptom)
    {

        $symptom = Symptom::find($symptom)->first();
        $symptom->location_id = $request->location_id;
        $symptom->name = $request->name;
        $symptom->save();
        return  redirect()->route('symptoms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Symptom  $symptom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Symptom $symptom)
    {
        Symptom::find($symptom)->first()->delete();
        return  redirect()->route('symptoms.index');
    }
}
