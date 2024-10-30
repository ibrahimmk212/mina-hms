@extends('admin.admin_layouts.app')
@section('content')



<main id="main" class="main" style="height: 100vh; overflow: auto;">

    <div class="pagetitle">
        <h1>Users</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">User List</h5>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{url('admin/user/add')}}" class="btn btn-primary float-end mx-2 my-4">Add
                                    User</a>
                            </div>

                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row serial_no">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                            <a href="{{url('admin/user/edit/' . $user->id)}}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{url('admin/user/delete/' . $user->id)}}"
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