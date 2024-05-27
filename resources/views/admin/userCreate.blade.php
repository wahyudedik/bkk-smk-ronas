@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Create User</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h5>Users</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.store') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="form-group col-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="username" name="username" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="phone" name="phone" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}" id="role" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" id="status" name="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

