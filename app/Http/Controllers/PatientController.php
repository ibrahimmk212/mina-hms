<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

class PatientController extends Controller
{
    public function index()
    {
        $data["patients"] = Patients::all();
        return view('doctor.patients.list', $data);
    }

    public function nurse_patients()
    {
        $data["patients"] = Patients::all();
        return view('nurse.patients.list', $data);
    }

    public function in_patient()
    {
        $data["patients"] = Patients::where('inpatient', true)->get();
        return view('doctor.patients.list', $data);
    }

    public function nurse_in_patient()
    {
        $data["patients"] = Patients::where('inpatient', true)->get();
        return view('nurse.patients.list', $data);
    }

    public function out_patient()
    {
        $data["patients"] = Patients::where('inpatient', false)->get();
        return view('doctor.patients.list', $data);
    }

    public function nurse_out_patient()
    {
        $data["patients"] = Patients::where('inpatient', false)->get();
        return view('nurse.patients.list', $data);
    }

    public function add()
    {
        return view('nurse.patients.add');
    }

    public function create(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:patients',
        //     'phone' => 'required',
        //     'address' => 'required',
        //     'inpatient' => 'required'
        // ]);
        $create = new Patients();
        $create->name = $request->name;
        $create->email = $request->email;
        $create->phone = $request->phone;
        $create->address = $request->address;
        $create->inpatient = $request->inpatient;
        $create->save();
        return redirect(url('nurse/patients'))->with('success', 'Patient added successfully');
    }

    public function edit($id)
    {
        $data['patient'] = Patients::find($id);
        return view('nurse.patients.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:patients,email,' . $id,
        //     'phone' => 'required',
        //     'address' => 'required',
        //     'inpatient' => 'required'
        // ]);
        $update = Patients::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->address = $request->address;
        $update->inpatient = $request->inpatient;
        $update->save();
        return redirect(url('nurse/patients'))->with('success', 'Patient updated successfully');
    }

    public function delete($id)
    {
        $delete = Patients::find($id);
        $delete->delete();
        return redirect(url('nurse/patients'))->with('warning', 'Patient deleted successfully');
    }

    public function search(Request $request)
    {
        $data['patients'] = Patients::where('name', 'like', '%' . $request->search . '%')->get();
        return view('doctor.patients.list', $data);
    }

    public function search_in_patient(Request $request)
    {
        $data['patients'] = Patients::where('name', 'like', '%' . $request->search . '%')->where('inpatient', true)->get();
        return view('doctor.patients.list', $data);
    }

    public function search_out_patient(Request $request)
    {
        $data['patients'] = Patients::where('name', 'like', '%' . $request->search . '%')->where('inpatient', false)->get();
        return view('doctor.patients.list', $data);
    }

    public function search_in_out_patient(Request $request)
    {
        $data['patients'] = Patients::where('name', 'like', '%' . $request->search . '%')->where('inpatient', $request->inpatient)->get();
        return view('doctor.patients.list', $data);
    }

    public function in_out_patient(Request $request)
    {
        $data['patients'] = Patients::where('inpatient', $request->inpatient)->get();
        return view('doctor.patients.list', $data);
    }

}
