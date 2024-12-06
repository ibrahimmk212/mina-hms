<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Appointments;
use Auth;


class PharmacistController extends Controller
{
    public function pharmacist_dashboard()
    {
        $data['patients_count'] = Patients::count();
        $data['inpatients_count'] = Patients::where('inpatient', true)->count();
        $data['outpatients_count'] = Patients::where('inpatient', false)->count();
        $data['sheduled_appointments_count'] = Appointments::where('doctor_id', Auth::user()->id)->count();
        return view('doctor.dashboard', $data);
    }
}
