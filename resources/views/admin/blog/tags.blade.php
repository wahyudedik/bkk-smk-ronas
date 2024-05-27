@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Tags</h1>
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
            <a href="{{ route('admin.blog.tag.create') }}" class="btn btn-primary">Create Tags</a>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tags</h5>

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
                        @foreach ($tags as $tag)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td>
                                    <form action="{{ route('admin.blog.tag.delete', ['id' => $tag->id]) }}" method="POST" onsubmit="event.preventDefault(); Swal.fire({
                                        title: 'Apakah Anda yakin?',
                                        text: 'Anda tidak akan dapat mengembalikan ini!',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Ya, hapus itu!'
                                      }).then((result) => {
                                        if (result.isConfirmed) {
                                          this.submit();
                                        }
                                      })">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('admin.blog.tag.edit', ['id' => $tag->id]) }}"
                                            class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
