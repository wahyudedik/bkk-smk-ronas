@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Careers</h1>
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
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <a href="{{ route('admin.career.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Create Career
                    </a>
                    <a href="{{ route('admin.career.link') }}" class="btn btn-secondary">
                        <i class="bi bi-link-45deg"></i> Create Career Link
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5>Career</h5>
            <div class="table-responsive">
                <table class="table datatable" id="careerTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gaji</th>
                            <th scope="col">Jenis Karyawan</th>
                            <th scope="col">Batas Waktu Lamaran</th>
                            <th scope="col">Tanggal Posting</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($careers as $career)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $career->perusahaan->nama }}</td>
                                <td>{{ $career->jabatan }}</td>
                                <td>{!! Str::limit(strip_tags($career->description), 50) !!}</td>
                                <td>Rp{{ number_format($career->gaji, 2, ',', '.') }}</td>
                                <td>{{ $career->jenis_karyawan }}</td>
                                <td>{{ \Carbon\Carbon::parse($career->batas_waktu)->format('d M Y') }}</td>
                                <td>{{ $career->created_at->format('d M Y') }}</td>
                                <td>
                                    <form action="{{ route('admin.career.delete', $career->id) }}" method="POST" onsubmit="event.preventDefault(); Swal.fire({
                                        title: 'Apakah Anda yakin?',
                                        text: 'Data ini akan dihapus secara permanen!',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Ya, hapus!'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            this.submit();
                                        }
                                    })">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-body">
            <h5>Career Link</h5>
            <div class="table-responsive">
                <table class="table datatable" id="careerLinkTable">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gaji</th>
                            <th scope="col">Jenis Karyawan</th>
                            <th scope="col">URL Lamaran</th>
                            <th scope="col">Batas Waktu Lamaran</th>
                            <th scope="col">Tanggal Dibuat</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($careerLinks as $index => $link)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $link->perusahaan->nama }}</td>
                                <td>{{ $link->jabatan }}</td>
                                <td>{!! Str::limit(strip_tags($career->description), 50) !!}</td>
                                <td>Rp{{ number_format($link->gaji, 2, ',', '.') }}</td>
                                <td>{{ $link->jenis_karyawan }}</td>
                                <td><a href="{{ $link->apply_url }}" target="_blank">Apply</a></td>
                                <td>{{ \Carbon\Carbon::parse($link->batas_waktu)->format('d M Y') }}</td>
                                <td>{{ $link->created_at->format('d M Y') }}</td>
                                <td>
                                    <form action="{{ route('admin.career.deleteLink', $link->id) }}" method="POST" onsubmit="return confirmDelete(this)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <script>
                                        function confirmDelete(form) {
                                            event.preventDefault();
                                            Swal.fire({
                                                title: 'Apakah Anda yakin?',
                                                text: "Data ini akan dihapus secara permanen!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Ya, hapus!',
                                                cancelButtonText: 'Tidak, batalkan!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    form.submit();
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
