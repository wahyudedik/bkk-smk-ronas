@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Perusahaan</h1>
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Perusahaan</h5>
                    <form method="POST" action="{{ route('admin.career.perusahaan.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gallery" class="col-sm-2 col-form-label">Galeri Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="gallery" name="gallery" multiple>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Perusahaan</h5>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Galeri Foto</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perusahaan as $perusahaan)
                                <tr>
                                    <td>{{ $perusahaan->id }}</td>
                                    <td>{{ $perusahaan->nama_perusahaan }}</td>
                                    <td>{{ $perusahaan->alamat }}</td>
                                    <td>{{ $perusahaan->nomor_telepon }}</td>
                                    <td>{{ $perusahaan->email }}</td>
                                    <td>
                                        @if($perusahaan->logo)
                                            <img src="{{ Storage::url($perusahaan->logo) }}" alt="Logo" style="width: 100px;">
                                        @else
                                            <span>Tidak ada logo</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($perusahaan->gallery)
                                            <img src="{{ Storage::url($perusahaan->gallery) }}" alt="Gallery" style="width: 100px; height: 100px; object-fit: cover;">
                                        @else
                                            <span>Tidak ada galeri</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.career.perusahaan.delete', $perusahaan->id) }}" onsubmit="return confirmDelete(this)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        <script>
                                            function confirmDelete(form) {
                                                event.preventDefault();
                                                Swal.fire({
                                                    title: 'Apakah Anda yakin?',
                                                    text: "Anda tidak akan dapat mengembalikan ini!",
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
    </div>
@endsection
