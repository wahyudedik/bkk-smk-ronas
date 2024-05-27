@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Users</h1>
    </div><!-- End Page Title -->
    
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                timer: 1500,
                showConfirmButton: false,
                timerProgressBar: true,
            })
        </script>
    @endif

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-sm" style="float: left">
                            Create User
                        </a>
                    </div>
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->username }}</td>                                        </td>
                                        <td>{{ $user->role }}</td>
                                        @if ($user->status == 'active')
                                        <td><span class="badge bg-primary">{{ $user->status }}</span></td>
                                        @else
                                        <td><span class="badge bg-danger">{{ $user->status }}</span></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('admin.user.delete', $user->id) }}" class="btn btn-danger btn-sm" onclick="return confirmDelete(this)">Delete</a>

                                            <script>
                                                function confirmDelete(link) {
                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, delete it!'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById('deleteForm').action = link.href;
                                                            document.getElementById('deleteForm').submit();
                                                        }
                                                    })
                                                    return false;
                                                }
                                            </script>
                                            <form action="" method="POST" id="deleteForm">
                                                @csrf
                                                @method('get')
                                            </form>
                                        </td>
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
@endsection
