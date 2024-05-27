@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Newsletter</h1>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <table id="newsletterTable" class="table datatable">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsletter as $item)
                        <tr>
                            <td>{{ $item->email }}</td>
                            <td>
                                <form action="{{ route('admin.newsletter.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirmDelete(event, '{{ $item->email }}')">Delete</button>
                                </form>

                                <script>
                                    function confirmDelete(event, email) {
                                        event.preventDefault(); // prevent form submit
                                        Swal.fire({
                                            title: 'Apakah Anda yakin?',
                                            text: 'Anda akan menghapus email ' + email,
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Hapus',
                                            cancelButtonText: 'Batal'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                event.target.form.submit();
                                            }
                                        });
                                        return false;
                                    }
                                </script>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- DataTable -->
    <script>
        $(document).ready(function() {
            $('#newsletterTable').DataTable();
        });
    </script>
@endsection
