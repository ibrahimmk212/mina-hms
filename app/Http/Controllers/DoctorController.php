<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Patients;
use Illuminate\Http\Request;
use Auth;


class DoctorController extends Controller
{
    public function doctor_dashboard()
    {
        $data['patients_count'] = Patients::count();
        $data['inpatients_count'] = Patients::where('inpatient', true)->count();
        $data['outpatients_count'] = Patients::where('inpatient', false)->count();
        $data['sheduled_appointments_count'] = Appointments::where('doctor_id', Auth::user()->id)->count();
        return view('doctor.dashboard', $data);
    }
}
