@extends('doctor.doctor_layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <a class="col-xxl-6 col-md-6" href="{{url('doctor/patients')}}">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Patients</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people
                                        "></i>
                                    </div>
                                    <div class="ps-3 w-50">
                                        <h6>
                                            {{$patients_count}}
                                        </h6>
                                        <div class="row">
                                            <div class="col-6"> <span class=" small pt-1 fw-bold">IN</span> <span
                                                    class="text-muted small pt-2 ps-1">{{$inpatients_count}}</span>
                                            </div>
                                            <div class="col-6"> <span class=" small pt-1 fw-bold">OUT</span> <span
                                                    class="text-muted small pt-2 ps-1">{{$outpatients_count}}</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <a class="col-xxl-6 col-md-6" href="{{url('doctor/appointments')}}">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Today's Appointments</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-calendar2-week"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            {{$sheduled_appointments_count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a><!-- End Revenue Card -->
                    <!-- Reports -->
                    <div class="col-lg-12">

                        <!-- Website Traffic -->
                        <div class="card">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Patients' Stats</span></h5>

                                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#trafficChart")).setOption({
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                top: '5%',
                                                left: 'center'
                                            },
                                            series: [{
                                                name: 'Access From',
                                                type: 'pie',
                                                radius: ['40%', '70%'],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: 'center'
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: '18',
                                                        fontWeight: 'bold'
                                                    }
                                                },
                                                labelLine: {
                                                    show: false
                                                },
                                                data: [{
                                                    value: {{$inpatients_count}},
                                                    name: 'In Patients'
                                                },
                                                {
                                                    value: {{$outpatients_count}},
                                                    name: 'Out Patients'
                                                }
                                                ]
                                            }]
                                        });
                                    });
                                </script>

                            </div>
                        </div><!-- End Website Traffic -->

                    </div><!-- End Right side columns -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->

        </div>
    </section>

</main><!-- End #main -->

@endsection