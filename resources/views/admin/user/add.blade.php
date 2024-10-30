@extends('admin.admin_layouts.app')
@section('content')



<main id="main" class="main" style="height: 100vh; overflow: auto;">

    <div class="pagetitle">
        <h1>Role</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message') 

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add new role</h5>

                        <!-- General Form Elements -->
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText1" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText2" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-12">
                                    <select name="role" class="form-control">
                                        <!-- <option value="admin">Admin</option> -->
                                        <option value="doctor">Doctor</option>
                                        <option value="nurse">Nurse</option>
                                        <option value="pharmacist">Pharmacist</option>
                                        <option value="lab_scientist">Laboratory Scientist</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection