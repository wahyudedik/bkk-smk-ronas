@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Categories</h1>
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

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: "{{ session('error') }}",
                timer: 1500,
                showConfirmButton: false,
                timerProgressBar: true,
            })
        </script>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-left">
                <a href="{{ route('admin.blog.category.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Create Category
                </a>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Categories</h5>
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <form action="{{ route('admin.blog.category.delete', $category->id) }}" method="POST" onsubmit="return handleDelete(event)">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('admin.blog.category.edit', $category->id) }}"
                                            class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <script>
                                        function handleDelete(event) {
                                            event.preventDefault(); // Mencegah form dari submit secara default
                                            Swal.fire({
                                                title: 'Apakah Anda yakin?',
                                                text: "Anda tidak akan dapat mengembalikan ini!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Ya, hapus itu!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    event.target.submit(); // Submit form secara manual jika pengguna mengkonfirmasi
                                                }
                                            })
                                        }
                                    </script>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
