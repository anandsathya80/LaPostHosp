<?php

namespace App\Http\Controllers\medical_check;

use App\Http\Controllers\Controller;
use App\Models\MedicalCheck;
use Illuminate\Http\Request;

class MedicalCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicalCheck = MedicalCheck::all();
        return response()->json($medicalCheck);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medicalCheck = MedicalCheck::create([
            'reservataion_id' => $request->input('reservation_id'),
            'problem' => $request->input('problem'),
            'diagnose' => $request->input('diagnose'),
            'diagnoses_result' => $request->input('diagnoses_result'),
            'notes' => $request->input('notes'),
        ]);

        return response()->json($medicalCheck, 'created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
