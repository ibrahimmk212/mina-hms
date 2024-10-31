<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;

class AppointmentController extends Controller
{
    public function doctor_appointments()
    {
        $data['appointments'] = Appointments::where('doctor_id', auth()->user()->id)->get();
        return view('doctor.appointments.list', $data);
    }

    public function doctor_scheduled_appointments()
    {
        $data['appointments'] = Appointments::where('doctor_id', auth()->user()->id)->where('status', 'scheduled')->get();
        return view('doctor.appointments.list', $data);
    }

    public function doctor_completed_appointments()
    {
        $data['appointments'] = Appointments::where('doctor_id', auth()->user()->id)->where('status', 'completed')->get();
        return view('doctor.appointments.list', $data);
    }

    public function appointment_by_patient(Request $request)
    {
        $data['appointments'] = Appointments::where('patient_id', $request->patient_id)->get();
        return view('doctor.appointments.list', $data);
    }

    public function appointment_by_doctor(Request $request)
    {
        $data['appointments'] = Appointments::where('doctor_id', $request->doctor_id)->get();
        return view('doctor.appointments.list', $data);
    }
}
