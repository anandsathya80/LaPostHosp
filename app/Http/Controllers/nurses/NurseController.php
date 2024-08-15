<?php

namespace App\Http\Controllers\nurses;

use App\Http\Controllers\Controller;
use App\Models\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nurse = Nurse::all();

        return response()->json($nurse);
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
        $nurse = Nurse::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'division_id' => $request->input('division_id'),
            'sex_id' => $request->input('sex_id'),
        ]);

        return response()->json([$nurse, 'created successfully']);
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
