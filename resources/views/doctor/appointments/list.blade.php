@extends('doctor.doctor_layouts.app')
@section('content')



<main id="main" class="main" style="height: 100vh; overflow: auto;">

    <div class="pagetitle">
        <h1>Appointments</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">Appointments List</h5>
                            </div>
                            <!-- <div class="col-lg-6">
                                <a href="{{url('admin/patient/add')}}" class="btn btn-primary float-end mx-2 my-4">Add
                                    Patient</a>
                            </div> -->

                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Appt. Date</th>
                                    <th scope="col">Note</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($appointments as $appointment)
                                    <tr>
                                        <th scope="row serial_no">{{$appointment->id}}</th>
                                        <td>{{$appointment->name}}</td>
                                        <td>{{$appointment->email}}</td>
                                        <td>{{$appointment->phone}}</td>
                                        <td>{{$appointment->address}}</td>
                                        <td>
                                            @if($appointment->inpatient == true)
                                                <span class="badge bg-success">In Patient</span>
                                            @else
                                                <span class="badge bg-danger">Out Patient</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/appointment/edit/' . $appointment->id)}}"
                                                class="btn btn-primary btn-sm">complete</a>
                                            <!-- <a href="{{url('admin/patient/delete/' . $appointment->id)}}"
                                                        class="btn btn-danger btn-sm">Delete</a> -->

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