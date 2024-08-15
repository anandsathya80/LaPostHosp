<?php

namespace App\Http\Controllers\doctors;

use App\Http\Controllers\Controller;
use App\Models\DoctorType;
use Illuminate\Http\Request;

class DoctorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctorType = DoctorType::all();

        return response()->json($doctorType);
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
        $doctorType = DoctorType::create([
            'doctor_type_name' => $request->input('doctor_type_name'),
        ]);

        return response()->json([$doctorType, 'created successfully']);
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
