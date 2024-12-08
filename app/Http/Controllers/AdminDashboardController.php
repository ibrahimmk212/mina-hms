<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Patients;
use App\Models\User;
use Auth;

class AdminDashboardController extends Controller
{
    public function admin_dashboard()
    {
        $data['patients_count'] = Patients::count();
        $data['inpatients_count'] = Patients::where('inpatient', true)->count();
        $data['outpatients_count'] = Patients::where('inpatient', false)->count();
        $data['doctors_count'] = User::where('role', 'doctor')->count();
        $data['nurses_count'] = User::where('role', 'nurse')->count();
        $data['pharmacists_count'] = User::where('role', 'pharmacist')->count();
        $data['receptionists_count'] = User::where('role', 'receptionist')->count();
        $data['lab_scientists_count'] = User::where('role', 'lab_scientist')->count();
        $data['sheduled_appointments_count'] = Appointments::where('doctor_id', Auth::user()->id)->count();

        return view('admin.dashboard', $data);
    }
}
