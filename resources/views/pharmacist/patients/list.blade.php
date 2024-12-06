@extends('doctor.doctor_layouts.app')
@section('content')



<main id="main" class="main" style="height: 100vh; overflow: auto;">

    <div class="pagetitle">
        <h1>Patient</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">Patient List</h5>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{url('admin/patient/add')}}" class="btn btn-primary float-end mx-2 my-4">Add
                                    Patient</a>
                            </div>

                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Cat.</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($patients as $patient)
                                    <tr>
                                        <th scope="row serial_no">{{$patient->id}}</th>
                                        <td>{{$patient->name}}</td>
                                        <td>{{$patient->email}}</td>
                                        <td>{{$patient->phone}}</td>
                                        <td>{{$patient->address}}</td>
                                        <td>
                                            @if($patient->inpatient == true)
                                                <span class="badge bg-success">In Patient</span>
                                            @else
                                                <span class="badge bg-danger">Out Patient</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/patient/edit/' . $patient->id)}}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{url('admin/patient/delete/' . $patient->id)}}"
                                                class="btn btn-danger btn-sm">Delete</a>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection