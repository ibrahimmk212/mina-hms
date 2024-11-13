@extends('admin.admin_layouts.app')
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

                    <!-- Patients Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Patients</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            {{$patients_count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Patients Card -->

                    <!-- Doctors Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Doctors</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            {{$doctors_count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Doctor Card -->

                    <!-- Nurse Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Nurses</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            {{$nurses_count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Nurses Card -->

                    <!-- Pharmacist Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Pharmacists</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            {{$pharmacists_count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Pharmacist Card -->


                    <!-- Lab Scientist Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Lab Scientists</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            {{$lab_scientists_count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Lab Scientist Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>


                            <div class="card-body">
                                <h5 class="card-title">Stats</h5>

                                <!-- Bar Chart -->
                                <canvas id="barChart" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#barChart'), {
                                            type: 'bar',
                                            data: {
                                                labels: [
                                                    "Patients",
                                                    "Doctors",
                                                    "Nurses",
                                                    "Pharmacists",
                                                    "Laboratorists",
                                                ],
                                                datasets: [
                                                    {
                                                        label: "Bar Chart",
                                                        data: [65, 59, 80, 81, 56, 55, 40],
                                                        backgroundColor: [
                                                            "rgba(255, 99, 132, 0.2)",
                                                            "rgba(255, 205, 86, 0.2)",
                                                            "rgba(75, 192, 192, 0.2)",
                                                            "rgba(54, 162, 235, 0.2)",
                                                            "rgba(153, 102, 255, 0.2)",
                                                        ],
                                                        borderColor: [
                                                            "rgb(255, 99, 132)",
                                                            "rgb(255, 159, 64)",
                                                            "rgb(75, 192, 192)",
                                                            "rgb(54, 162, 235)",
                                                            "rgb(153, 102, 255)",
                                                        ],
                                                        borderWidth: 1
                                                    }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                                <!-- End Bar CHart -->

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Reports -->
        </div>
        </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->

@endsection