@extends('user.app')

@section('content')
    <div class="pagetitle">
        <h1 class="display-4 fw-bold text-uppercase">Biodata</h1>
    </div><!-- End Page Title -->

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h6>
            <div class="tinymce-editor">{!! $user->biodata !!}</div>

            <form action="{{ route('user.biodata.store', ['id' => $career->id, 'jabatan' => $career->jabatan, 'perusahaan' => $career->perusahaan->nama_perusahaan]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="user_id" class="form-label">ID User:</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $user->id }}"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="career_id" class="form-label">ID Karir:</label>
                    <input type="text" class="form-control" id="career_id" name="career_id" value="{{ $career->id }}"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>

                <div class="mb-3">
                    <label for="status_alumni" class="form-label">Alumni:</label>
                    <select class="form-select" id="status_alumni" name="status_alumni" required>
                        <option value="SMKS RONAS" selected>SMKS RONAS</option>
                        <option value="UMUM">UMUM</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir:</label>
                    <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                </div>

                <div class="mb-3">
                    <label for="pengalaman_kerja" class="form-label">Pengalaman Kerja:</label>
                    <input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja">
                </div>

                <div class="mb-3">
                    <label for="pengalaman_organisasi" class="form-label">Pengalaman Organisasi:</label>
                    <input type="text" class="form-control" id="pengalaman_organisasi" name="pengalaman_organisasi">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Foto Profil:</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="cv_pdf" class="form-label">Upload CV (PDF):</label>
                    <input type="file" class="form-control" id="cv_pdf" name="cv_pdf"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="ijazah_pdf" class="form-label">Upload Ijazah (PDF):</label>
                    <input type="file" class="form-control" id="ijazah_pdf" name="ijazah_pdf"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="transkrip_nilai_pdf" class="form-label">Upload Transkrip Nilai (PDF):</label>
                    <input type="file" class="form-control" id="transkrip_nilai_pdf" name="transkrip_nilai_pdf"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="ktp_pdf" class="form-label">Upload KTP (PDF):</label>
                    <input type="file" class="form-control" id="ktp_pdf" name="ktp_pdf"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="kk_pdf" class="form-label">Upload Kartu Keluarga (PDF):</label>
                    <input type="file" class="form-control" id="kk_pdf" name="kk_pdf"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="surat_sehat_pdf" class="form-label">Upload Surat Keterangan Sehat (PDF):</label>
                    <input type="file" class="form-control" id="surat_sehat_pdf" name="surat_sehat_pdf"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="foto_pdf" class="form-label">Upload Foto (PDF):</label>
                    <input type="file" class="form-control" id="foto_pdf" name="foto_pdf"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="surat_pengalaman_kerja_pdf" class="form-label">Upload Surat Pengalaman Kerja
                        (PDF):</label>
                    <input type="file" class="form-control" id="surat_pengalaman_kerja_pdf"
                        name="surat_pengalaman_kerja_pdf" onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <div class="mb-3">
                    <label for="sertifikat_pdf" class="form-label">Upload Sertifikat (PDF):</label>
                    <input type="file" class="form-control" id="sertifikat_pdf" name="sertifikat_pdf"
                        onchange="validateSize(this, 2048)">
                    <div class="invalid-feedback">Ukuran file maksimal 2MB.</div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
