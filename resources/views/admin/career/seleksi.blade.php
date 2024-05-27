@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Seleksi</h1>
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
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">List Seleksi</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Biodata User ID</th>
                            <th>Career ID</th>
                            <th>Hasil Administrasi</th>
                            <th>Psikotes</th>
                            <th>Interview HRD</th>
                            <th>Interview User</th>
                            <th>Tes Kesehatan</th>
                            <th>Hasil Akhir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($seleksis as $seleksi)
                            @if ($seleksi->hasil_akhir === 'proses_seleksi')
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="#" onclick="toggleTable(this)"
                                            data-target="tableBiodata">{{ $seleksi->biodata_user_id }}</a>
                                        <script>
                                            function toggleTable(element) {
                                                event.preventDefault();
                                                var tableId = element.getAttribute('data-target').replace('#', '');
                                                var table = document.getElementById(tableId);
                                                if (table.style.display === "none") {
                                                    table.style.display = "block";
                                                } else {
                                                    table.style.display = "none";
                                                }
                                            }
                                        </script>
                                    </td>
                                    <td><a href="#" onclick="toggleTable(this)"
                                            data-target="tableCareer">{{ $seleksi->career_id }}</a></td>
                                    <td>{{ $seleksi->hasil_administrasi }}</td>
                                    <td>{{ $seleksi->psikotes }}</td>
                                    <td>{{ $seleksi->interview_hrd }}</td>
                                    <td>{{ $seleksi->interview_user }}</td>
                                    <td>{{ $seleksi->tes_kesehatan }}</td>
                                    <td>{{ $seleksi->hasil_akhir }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.seleksi.edit', $seleksi->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('admin.career.seleksi.delete', $seleksi->id) }}"
                                                method="POST" onsubmit="return confirmDelete(event)">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            <script>
                                                function confirmDelete(event) {
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
                                                            event.target.closest('form').submit();
                                                        }
                                                    });
                                                    return false;
                                                }
                                            </script>
                                        </div>
                                    </td>
                                </tr>
                                {{-- data bio --}}
                                <div class="card" id="tableBiodata" style="display: none;">
                                    <div class="card-header">
                                        <h5 class="card-title">Biodata User ID: {{ $seleksi->biodata_user_id }}
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li class="list-group-item"><strong>Nama Lengkap:</strong> {{ $seleksi->biodataUser->nama_lengkap }}</li>
                                            <li class="list-group-item"><strong>Email:</strong> {{ $seleksi->biodataUser->email }}</li>
                                            <li class="list-group-item"><strong>Nomor Telepon:</strong> {{ $seleksi->biodataUser->nomor_telepon }}</li>
                                            <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $seleksi->biodataUser->tanggal_lahir }}</li>
                                            <li class="list-group-item"><strong>Alamat:</strong> {{ $seleksi->biodataUser->alamat }}</li>
                                            <li class="list-group-item"><strong>Status Alumni:</strong> {{ $seleksi->biodataUser->status_alumni }}</li>
                                            <li class="list-group-item"><strong>Pendidikan Terakhir:</strong> {{ $seleksi->biodataUser->pendidikan_terakhir }}</li>
                                            <li class="list-group-item"><strong>Pengalaman Kerja:</strong> {{ $seleksi->biodataUser->pengalaman_kerja }}</li>
                                            <li class="list-group-item"><strong>Pengalaman Organisasi:</strong> {{ $seleksi->biodataUser->pengalaman_organisasi }}
                                            </li>
                                            <li class="list-group-item"><strong>CV PDF:</strong> <a href="{{ Storage::url($seleksi->biodataUser->cv_pdf) }}"
                                                    target="_blank">CV PDF</a></li>
                                            <li class="list-group-item"><strong>Ijazah PDF:</strong> <a href="{{ Storage::url($seleksi->biodataUser->ijazah_pdf) }}"
                                                    target="_blank">Ijazah PDF</a></li>
                                            <li class="list-group-item"><strong>Transkrip Nilai PDF:</strong> <a
                                                    href="{{ Storage::url($seleksi->biodataUser->transkrip_nilai_pdf) }}"
                                                    target="_blank">Transkrip Nilai PDF</a></li>
                                            <lic class="list-group-item"><strong>KTP PDF:</strong> <a href="{{ Storage::url($seleksi->biodataUser->ktp_pdf) }}"
                                                    target="_blank">KTP PDF</a></lic>
                                            <li class="list-group-item"><strong>KK PDF:</strong> <a href="{{ Storage::url($seleksi->biodataUser->kk_pdf) }}"
                                                    target="_blank">KK PDF</a></li>
                                            <li class="list-group-item"><strong>Surat Sehat PDF:</strong> <a
                                                    href="{{ Storage::url($seleksi->biodataUser->surat_sehat_pdf) }}"
                                                    target="_blank">Surat Sehat PDF</a></li>
                                            <li class="list-group-item"><strong>Foto PDF:</strong> <a href="{{ Storage::url($seleksi->biodataUser->foto_pdf) }}"
                                                    target="_blank">Foto PDF</a></li>
                                            <li class="list-group-item"><strong>Surat Pengalaman Kerja PDF:</strong> <a
                                                    href="{{ Storage::url($seleksi->biodataUser->surat_pengalaman_kerja_pdf) }}"
                                                    target="_blank">Surat Pengalaman Kerja PDF</a></li>
                                            <li class="list-group-item"><strong>Sertifikat PDF:</strong> <a
                                                    href="{{ Storage::url($seleksi->biodataUser->sertifikat_pdf) }}"
                                                    target="_blank">Sertifikat PDF</a></li>
                                            <li class="list-group-item"><img src="{{ Storage::url($seleksi->biodataUser->image) }}" alt="Image"
                                                    style="width: 100px; height: auto;"></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- data career --}}
                                <div class="card" id="tableCareer" style="display: none;">
                                    <div class="card-header">
                                        <h5 class="card-title">Career User ID: {{ $seleksi->career_id }}
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <strong>Perusahaan ID:</strong>{{ $seleksi->career_id }}
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Jabatan:</strong>{{ $seleksi->career->jabatan }}
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Deskripsi:</strong>{!! $seleksi->career->description!!}
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Gaji:</strong>{{ $seleksi->career->gaji }}
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Jenis Karyawan:</strong>{{ $seleksi->career->jenis_karyawan }}
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Batas Waktu:</strong>{{ $seleksi->career->batas_waktu }}
                                                </li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

{{-- <tr id="tableBiodata" style="display: none;">
    <td colspan="20">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title">Biodata User ID: {{ $seleksi->biodata_user_id }}
                </h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Status Alumni</th>
                                <th>Pendidikan Terakhir</th>
                                <th>CV PDF</th>
                                <th>Ijazah PDF</th>
                                <th>Transkrip Nilai PDF</th>
                                <th>KTP PDF</th>
                                <th>KK PDF</th>
                                <th>Surat Sehat PDF</th>
                                <th>Foto PDF</th>
                                <th>Surat Pengalaman Kerja PDF</th>
                                <th>Pengalaman Kerja</th>
                                <th>Pengalaman Organisasi</th>
                                <th>Image</th>
                                <th>Sertifikat PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{ $seleksi->biodataUser->nama_lengkap }}</td>
                                <td>{{ $seleksi->biodataUser->email }}</td>
                                <td>{{ $seleksi->biodataUser->nomor_telepon }}</td>
                                <td>{{ $seleksi->biodataUser->tanggal_lahir }}</td>
                                <td>{{ $seleksi->biodataUser->alamat }}</td>
                                <td>{{ $seleksi->biodataUser->status_alumni }}</td>
                                <td>{{ $seleksi->biodataUser->pendidikan_terakhir }}</td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->cv_pdf) }}"
                                        target="_blank">CV PDF</a></td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->ijazah_pdf) }}"
                                        target="_blank">Ijazah PDF</a></td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->transkrip_nilai_pdf) }}"
                                        target="_blank">Transkrip Nilai PDF</a></td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->ktp_pdf) }}"
                                        target="_blank">KTP PDF</a></td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->kk_pdf) }}"
                                        target="_blank">KK PDF</a></td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->surat_sehat_pdf) }}"
                                        target="_blank">Surat Sehat PDF</a></td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->foto_pdf) }}"
                                        target="_blank">Foto PDF</a></td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->surat_pengalaman_kerja_pdf) }}"
                                        target="_blank">Surat Pengalaman Kerja PDF</a></td>
                                <td>{{ $seleksi->biodataUser->pengalaman_kerja }}</td>
                                <td>{{ $seleksi->biodataUser->pengalaman_organisasi }}</td>
                                <td><img src="{{ asset('storage/app/' . $seleksi->biodataUser->image) }}"
                                        alt="Image" style="width: 100px; height: auto;">
                                </td>
                                <td><a href="{{ asset('storage/app/' . $seleksi->biodataUser->sertifikat_pdf) }}"
                                        target="_blank">Sertifikat PDF</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </td>
</tr> --}}
