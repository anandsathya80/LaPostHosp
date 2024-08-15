<?php

namespace App\Http\Controllers\static_type;

use App\Http\Controllers\Controller;
use App\Models\Sex;
use Illuminate\Http\Request;

class SexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sex = Sex::all();

        return response()->json($sex);
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
        $sex = Sex::create([
            'sex' => $request->input('sex'),
        ]);

        return response()->json([$sex, 'created successfully']);
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
