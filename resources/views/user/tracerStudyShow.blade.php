<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracer Study - {{ $tracerStudy->fullName }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-OgVQ4P6Y6LyK5JiL+Y+LPTFgM1n9CkYtq8z0Y+bK5159QQQR0JrY+jP2+o24F2tMA" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="card px-3">
        <div class="row">
            <div class="form-group mt-3 col-6">
                <label for="fullName">Nama Lengkap</label>
                <input type="text" class="form-control" name="fullName" id="fullName"
                    value="{{ $tracerStudy->fullName }}" placeholder="Masukkan nama lengkap Anda" readonly>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="gender">Jenis Kelamin</label>
                <select class="form-control" id="gender" name="gender" readonly>
                    <option value="Laki-laki" @if ($tracerStudy->gender == 'Laki-laki') selected @endif>Laki-laki</option>
                    <option value="Perempuan" @if ($tracerStudy->gender == 'Perempuan') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="birthDate">Tanggal Lahir</label>
                <input type="date" class="form-control" name="birthDate" id="birthDate"
                    value="{{ $tracerStudy->birthDate }}" readonly>
            </div>
            <div class="form-group mt-3 col-6">
                <label for="address">Alamat Saat Ini</label>
                <input type="text" class="form-control" name="address" id="address"
                    value="{{ $tracerStudy->address }}" placeholder="Masukkan alamat Anda" readonly>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" class="form-control" name="phone" id="phone"
                    value="{{ $tracerStudy->phone }}" placeholder="Masukkan nomor telepon Anda" readonly>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email"
                    placeholder="Masukkan email Anda" value="{{ $tracerStudy->email }}" readonly>
            </div>
            <div class="form-group mt-3 col-6">
                <label for="graduationYear">Tahun Lulus</label>
                <input type="number" class="form-control" name="graduationYear" id="graduationYear"
                    placeholder="Masukkan tahun lulus Anda" value="{{ $tracerStudy->graduationYear }}" readonly>
            </div>
            <div class="form-group mt-3 col-6">
                <label for="major">Jurusan Saat di SMK</label>
                <input type="text" class="form-control" name="major" id="major"
                    placeholder="Masukkan jurusan Anda di SMK" value="{{ $tracerStudy->major }}" readonly>
            </div>
        </div>

        <!-- Pendidikan Lanjutan -->
        <h4 class="mt-3"><strong>Pendidikan Lanjutan</strong></h4>
        <div class="row">
            <div class="form-group col-6">
                <label for="furtherStudy">Apakah melanjutkan pendidikan setelah lulus dari SMK?</label>
                <select class="form-control" id="furtherStudy" name="furtherStudy" readonly>
                    <option value="ya" @if ($tracerStudy->furtherStudy == 'ya') selected @endif>Ya</option>
                    <option value="tidak" @if ($tracerStudy->furtherStudy == 'tidak') selected @endif>Tidak</option>
                </select>
            </div>
            <div class="form-group col-6">
                <label for="institution">Nama Institusi Pendidikan Lanjutan</label>
                <input type="text" class="form-control" name="institution" id="institution"
                    placeholder="Masukkan nama institusi pendidikan" value="{{ $tracerStudy->institution }}" readonly>
            </div>
            <div class="form-group col-4">
                <label for="program">Program Studi yang Diambil</label>
                <input type="text" class="form-control" name="program" id="program"
                    placeholder="Masukkan program studi" value="{{ $tracerStudy->program }}" readonly>
            </div>
            <div class="form-group col-4">
                <label for="educationLevel">Jenjang Pendidikan yang Ditempuh</label>
                <select class="form-control" id="educationLevel" name="educationLevel" readonly>
                    <option value="D1" @if ($tracerStudy->educationLevel == 'D1') selected @endif>D1</option>
                    <option value="D2" @if ($tracerStudy->educationLevel == 'D2') selected @endif>D2</option>
                    <option value="D3" @if ($tracerStudy->educationLevel == 'D3') selected @endif>D3</option>
                    <option value="D4/S1" @if ($tracerStudy->educationLevel == 'D4/S1') selected @endif>D4/S1</option>
                    <option value="Lainnya" @if ($tracerStudy->educationLevel == 'Lainnya') selected @endif>Lainnya</option>
                </select>
            </div>
            <div class="form-group col-4">
                <label for="educationStatus">Status Pendidikan Saat Ini</label>
                <select class="form-control" id="educationStatus" name="educationStatus" readonly>
                    <option value="Masih kuliah" @if ($tracerStudy->educationStatus == 'Masih kuliah') selected @endif>Masih kuliah
                    </option>
                    <option value="Sudah lulus" @if ($tracerStudy->educationStatus == 'Sudah lulus') selected @endif>Sudah lulus
                    </option>
                    <option value="Drop-out" @if ($tracerStudy->educationStatus == 'Drop-out') selected @endif>Drop-out</option>
                </select>
            </div>
        </div>

        <!-- Kegiatan Kerja -->
        <h4 class="mt-3"><strong>Kegiatan Kerja</strong></h4>
        <div class="row">
            <div class="form-group mt-3 col-3">
                <label for="employmentStatus">Status Pekerjaan Saat Ini</label>
                <input type="text" class="form-control" name="employmentStatus" id="employmentStatus"
                    value="{{ $tracerStudy->employmentStatus }}" readonly>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="companyName">Nama Perusahaan atau Tempat Kerja</label>
                <input type="text" class="form-control" name="companyName" id="companyName"
                    value="{{ $tracerStudy->companyName }}" readonly>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="industry">Bidang Industri Perusahaan</label>
                <input type="text" class="form-control" name="industry" id="industry"
                    value="{{ $tracerStudy->industry }}" readonly>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="jobTitle">Jabatan atau Posisi di Tempat Kerja</label>
                <input type="text" class="form-control" name="jobTitle" id="jobTitle"
                    value="{{ $tracerStudy->jobTitle }}" readonly>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="startDate">Tanggal Mulai Bekerja</label>
                <input type="date" class="form-control" name="startDate" id="startDate"
                    value="{{ $tracerStudy->startDate }}" readonly>
            </div>
            <div class="form-group mt-3 col-4">
                <label for="companyAddress">Alamat Perusahaan</label>
                <input type="text" class="form-control" name="companyAddress" id="companyAddress"
                    value="{{ $tracerStudy->companyAddress }}" readonly>
            </div>
            <div class="form-group mt-3 col-2">
                <label for="salary">Gaji/Bulanan</label>
                <input type="number" class="form-control" name="salary" id="salary"
                    value="{{ $tracerStudy->salary }}" readonly>
            </div>
            <div class="form-group mt-3 col-3">
                <label for="jobMatch">Pekerjaan sesuai dengan jurusan di SMK?</label>
                <input type="text" class="form-control" name="jobMatch" id="jobMatch"
                    value="{{ $tracerStudy->jobMatch }}" readonly>
            </div>
        </div>

        <!-- Pengalaman Kerja -->
        <h4 class="mt-3"><strong>Pengalaman Kerja</strong></h4>
        <div class="form-group mt-3">
            <label for="previousJob">Riwayat Pekerjaan Sebelumnya</label>
            <textarea class="form-control" name="previousJob" id="previousJob" rows="3"
                placeholder="Tuliskan riwayat pekerjaan sebelumnya jika ada" readonly>{{ $tracerStudy->previousJob }}</textarea>
        </div>

        <!-- Keterampilan dan Kompetensi -->
        <h4 class="mt-3"><strong>Keterampilan dan Kompetensi</strong></h4>
        <div class="form-group mt-3">
            <label for="skillsFromSMK">Keterampilan yang Diperoleh Selama di SMK yang Bermanfaat di Tempat
                Kerja</label>
            <textarea class="form-control" name="skillsFromSMK" id="skillsFromSMK" rows="3"
                placeholder="Tuliskan keterampilan yang diperoleh di SMK" readonly>{{ $tracerStudy->skillsFromSMK }}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="additionalSkills">Keterampilan Tambahan yang Diperoleh Setelah Lulus dari SMK</label>
            <textarea class="form-control" name="additionalSkills" id="additionalSkills" rows="3"
                placeholder="Tuliskan keterampilan tambahan yang diperoleh" readonly>{{ $tracerStudy->additionalSkills }}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="skillsToImprove">Keterampilan yang Dirasa Perlu untuk Ditingkatkan</label>
            <textarea class="form-control" name="skillsToImprove" id="skillsToImprove" rows="3"
                placeholder="Tuliskan keterampilan yang perlu ditingkatkan" readonly>{{ $tracerStudy->skillsToImprove }}</textarea>
        </div>

        <!-- Pengalaman Pelatihan -->
        <h4 class="mt-3"><strong>Pengalaman Pelatihan</strong></h4>
        <div class="form-group mt-3">
            <label for="trainings">Mengikuti Pelatihan atau Kursus Tambahan Setelah Lulus dari SMK</label>
            <textarea class="form-control" name="trainings" id="trainings" rows="3"
                placeholder="Tuliskan pelatihan atau kursus yang diikuti" readonly>{{ $tracerStudy->trainings }}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="certifications">Sertifikasi yang Diperoleh (jika ada)</label>
            <textarea class="form-control" name="certifications" id="certifications" rows="3"
                placeholder="Tuliskan sertifikasi yang diperoleh" readonly>{{ $tracerStudy->certifications }}</textarea>
        </div>

        <!-- Kepuasan Terhadap Pendidikan di SMK -->
        <h4 class="mt-3"><strong>Kepuasan Terhadap Pendidikan di SMK</strong></h4>
        <div class="form-group mt-3">
            <label for="curriculumSatisfaction">Tingkat Kepuasan terhadap Kurikulum dan Pengajaran di SMK</label>
            <textarea class="form-control" name="curriculumSatisfaction" id="curriculumSatisfaction" rows="3"
                placeholder="Tuliskan tingkat kepuasan Anda terhadap kurikulum dan pengajaran" readonly>{{ $tracerStudy->curriculum_satisfaction }}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="facilitiesSatisfaction">Penilaian terhadap Fasilitas dan Lingkungan Belajar di SMK</label>
            <textarea class="form-control" name="facilitiesSatisfaction" id="facilitiesSatisfaction" rows="3"
                placeholder="Tuliskan penilaian Anda terhadap fasilitas dan lingkungan belajar" readonly>{{ $tracerStudy->facilities_satisfaction }}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="suggestions">Saran dan Masukan untuk Perbaikan SMK</label>
            <textarea class="form-control" name="suggestions" id="suggestions" rows="3"
                placeholder="Tuliskan saran dan masukan Anda" readonly>{{ $tracerStudy->suggestions }}</textarea>
        </div>

        <!-- Informasi Tambahan -->
        <h4 class="mt-3"><strong>Informasi Tambahan</strong></h4>
        <div class="form-group mb-3">
            <label for="careerPlans">Rencana Karir Jangka Panjang</label>
            <textarea class="form-control" name="careerPlans" id="careerPlans" rows="3"
                placeholder="Tuliskan rencana karir jangka panjang Anda" readonly>{{ $tracerStudy->career_plans }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="challenges">Hambatan atau Tantangan yang Dihadapi dalam Dunia Kerja</label>
            <textarea class="form-control" name="challenges" id="challenges" rows="3"
                placeholder="Tuliskan hambatan atau tantangan yang Anda hadapi" readonly>{{ $tracerStudy->challenges }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="advice">Saran untuk Siswa SMK yang Masih Belajar</label>
            <textarea class="form-control" name="advice" id="advice" rows="3"
                placeholder="Tuliskan saran Anda untuk siswa SMK" readonly>{{ $tracerStudy->advice }}</textarea>
        </div>

    </div>

</body>

</html>
