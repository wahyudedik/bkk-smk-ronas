@extends('user.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tracer Study</h1>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tracer Study</h3>
            <button type="button" id="add-tracer-study-button" class="btn btn-primary float-right">
                Add Tracer Study
            </button>
        </div>

        <div class="card-body">
            @if (session()->has('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ session('success') }}",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            @endif
            @if (session()->has('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: "{{ session('error') }}",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            @endif
            @if ($errors->any())
                <script>
                    const errors = [];
                    @foreach ($errors->all() as $error)
                        errors.push("{{ $error }}");
                    @endforeach
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: errors.join('<br>'),
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tracer Study</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tracerStudies as $tracerStudy)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tracerStudy->fullName }}</td>
                                <td>
                                    <a href="{{ route('tracer-study.show', $tracerStudy->id) }}" class="btn btn-primary btn-sm" target="_blank">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="{{ route('tracer-study.store') }}" method="POST" enctype="multipart/form-data" id="add-tracer-study-form"
        class="d-none">
        @csrf
        <div class="row">
            <div class="form-group mt-3 col-6">
                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Nama lengkap">
            </div>
            <div class="form-group mt-3 col-3">
                <select class="form-control" id="gender" name="gender">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-3 col-3">
                <input type="date" class="form-control" name="birthDate" id="birthDate"
                    >
            </div>
            <div class="form-group mt-3 col-6">
                <input type="text" class="form-control" name="address" id="address"
                     placeholder="Alamat">
            </div>
            <div class="form-group mt-3 col-3">
                <input type="tel" class="form-control" name="phone" id="phone"
                     placeholder="Nomor telepon">
            </div>
            <div class="form-group mt-3 col-3">
                <input type="email" class="form-control" name="email" id="email"
                    placeholder="Email">
            </div>
            <div class="form-group mt-3 col-6">
                <input type="number" class="form-control" name="graduationYear" id="graduationYear"
                    placeholder="Tahun lulus">
            </div>
            <div class="form-group mt-3 col-6">
                <input type="text" class="form-control" name="major" id="major"
                    placeholder="Jurusan di SMK">
            </div>
        </div>

        <!-- Pendidikan Lanjutan -->
        <h4 class="mt-3"><strong>Pendidikan Lanjutan</strong></h4>
        <div class="row">
            <div class="form-group mt-3 col-6">
                <select class="form-control" id="furtherStudy" name="furtherStudy">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>
            <div class="form-group mt-3 col-6">
                <input type="text" class="form-control" name="institution" id="institution"
                    placeholder="Masukkan institusi pendidikan">
            </div>
            <div class="form-group mt-3 col-4">
                <input type="text" class="form-control" name="program" id="program">
            </div>
            <div class="form-group mt-3 col-4">
                <select class="form-control" id="educationLevel" name="educationLevel">
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4/S1">D4/S1</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group mt-3 col-4">
                <select class="form-control" id="educationStatus" name="educationStatus">
                    <option value="Masih kuliah">Masih kuliah</option>
                    <option value="Sudah lulus">Sudah lulus</option>
                    <option value="Drop-out">Drop-out</option>
                </select>
            </div>
        </div>

        <!-- Kegiatan Kerja -->
        <h4 class="mt-3"><strong>Kegiatan Kerja</strong></h4>
        <div class="row">
            <div class="form-group mt-3 col-3">
                <input type="text" class="form-control" name="employmentStatus" id="employmentStatus" placeholder="Status pekerjaan saat ini">
            </div>
            <div class="form-group mt-3 col-3">
                <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Nama perusahaan atau tempat kerja">
            </div>
            <div class="form-group mt-3 col-3">
                <input type="text" class="form-control" name="industry" id="industry" placeholder="Bidang industri perusahaan">
            </div>
            <div class="form-group mt-3 col-3">
                <input type="text" class="form-control" name="jobTitle" id="jobTitle" placeholder="Jabatan atau posisi di tempat kerja">
            </div>
            <div class="form-group mt-3 col-3">
                <input type="date" class="form-control" name="startDate" id="startDate">
            </div>
            <div class="form-group mt-3 col-4">
                <input type="text" class="form-control" name="companyAddress" id="companyAddress" placeholder="Alamat perusahaan">
            </div>
            <div class="form-group mt-3 col-2">
                <input type="number" class="form-control" name="salary" id="salary" placeholder="Gaji per bulan">
            </div>
            <div class="form-group mt-3 col-3">
                <select class="form-control" name="jobMatch" id="jobMatch">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
        </div>

        <!-- Pengalaman Kerja -->
        <h4 class="mt-3"><strong>Pengalaman Kerja</strong></h4>
        <div class="form-group mt-3">
            <textarea class="form-control" name="previousJob" id="previousJob" rows="3" placeholder="riwayat pekerjaan sebelumnya jika ada"></textarea>
        </div>

        <!-- Keterampilan dan Kompetensi -->
        <h4 class="mt-3"><strong>Keterampilan dan Kompetensi</strong></h4>
        <div class="form-group mt-3">
            <textarea class="form-control" name="skillsFromSMK" id="skillsFromSMK" rows="3" placeholder="keterampilan yang diperoleh di SMK"></textarea>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="additionalSkills" id="additionalSkills" rows="3" placeholder="keterampilan tambahan yang diperoleh"></textarea>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="skillsToImprove" id="skillsToImprove" rows="3" placeholder="keterampilan yang perlu ditingkatkan"></textarea>
        </div>

        <!-- Pengalaman Pelatihan -->
        <h4 class="mt-3"><strong>Pengalaman Pelatihan</strong></h4>
        <div class="form-group mt-3">
            <textarea class="form-control" name="trainings" id="trainings" rows="3" placeholder="pelatihan atau kursus yang diikuti"></textarea>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="certifications" id="certifications" rows="3" placeholder="sertifikasi yang diperoleh"></textarea>
        </div>

        <!-- Kepuasan Terhadap Pendidikan di SMK -->
        <h4 class="mt-3"><strong>Kepuasan Terhadap Pendidikan di SMK</strong></h4>
        <div class="form-group mt-3">
            <textarea class="form-control" name="curriculumSatisfaction" id="curriculumSatisfaction" rows="3" placeholder="tingkat kepuasan terhadap kurikulum dan pengajaran"></textarea>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="facilitiesSatisfaction" id="facilitiesSatisfaction" rows="3" placeholder="penilaian terhadap fasilitas dan lingkungan belajar"></textarea>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="suggestions" id="suggestions" rows="3" placeholder="saran dan masukan"></textarea>
        </div>

        <!-- Informasi Tambahan -->
        <h4 class="mt-3"><strong>Informasi Tambahan</strong></h4>
        <div class="form-group mb-3">
            <textarea class="form-control" name="careerPlans" id="careerPlans" rows="3" placeholder="rencana karir jangka panjang"></textarea>
        </div>
        <div class="form-group mb-3">
            <textarea class="form-control" name="challenges" id="challenges" rows="3" placeholder="hambatan atau tantangan yang dihadapi"></textarea>
        </div>
        <div class="form-group mb-3">
            <textarea class="form-control" name="advice" id="advice" rows="3" placeholder="saran untuk siswa SMK"></textarea>
        </div>

        <button type="submit" id="btnToggleAddTracerStudy" class="btn btn-primary float-right mt-3">Submit</button>
    </form>
    
    <script>
        const addTracerStudyForm = document.getElementById('add-tracer-study-form');
        const addTracerStudyButton = document.getElementById('add-tracer-study-button');

        addTracerStudyButton.addEventListener('click', () => {
            addTracerStudyForm.classList.toggle('d-none');
            addTracerStudyButton.innerText = addTracerStudyButton.innerText === 'Add Tracer Study' ?
                'Hide Add Tracer Study' : 'Add Tracer Study';
        });
    </script>
@endsection
