<?php

namespace App\Http\Controllers\doctors;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\MedicalCheck;
use App\Models\Reservation;
use App\Models\Schedule;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor = Doctor::all();
        return response()->json($doctor);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // doctor's schedule
    public function doctorSchedules(string $id)
    {
        $doctorSchedule = Schedule::where('doctor_id', '=', $id);
        return response()->json($doctorSchedule);
    }
    // doctor's schedule

    // doctor's reservation
    public function doctorReservations(string $id)
    {
        $doctorReservation = Reservation::leftjoin('schedules', 'reservations.schedule_id', '=', 'schedules.id')
            ->where('schedule.doctor_id', '=', $id)
            ->get();
        return response()->json($doctorReservation);
    }
    // doctor's reservation

    // doctor's medical checks
    public function doctorMedicalCheck(string $id)
    {
        $doctorMedicalCheck = MedicalCheck::join('reservations', 'medical_checks.reservation_id', '=', 'reservations.id')
            ->join('schedules', 'reservations.schedule_id', '=', 'schedules.id')
            ->where('schedule.doctor_id', '=', $id)
            ->get();
        return response()->json($doctorMedicalCheck);
    }
    // doctor's medical checks

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctor = Doctor::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'division_id' => $request->input('division_id'),
            'sex_id' => $request->input('sex_id'),
            'doctor_type_id' => $request->input('doctor_type_id'),
        ]);
        return response()->json([$doctor, 'created successfully']);
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
