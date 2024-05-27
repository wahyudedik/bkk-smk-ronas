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
        <div class="card-body">
            <form action="{{ route('tracer-study.store') }}" method="POST" enctype="multipart/form-data" id="tracerStudyForm">
                @csrf
                <div class="form-group mt-3">
                    <label for="fullName">Nama Lengkap</label>
                    <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Masukkan nama lengkap Anda">
                </div>
                <div class="form-group mt-3">
                    <label for="gender">Jenis Kelamin</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="birthDate">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="birthDate" id="birthDate">
                </div>
                <div class="form-group mt-3">
                    <label for="address">Alamat Saat Ini</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Masukkan alamat Anda">
                </div>
                <div class="form-group mt-3">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Masukkan nomor telepon Anda">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email Anda">
                </div>
                <div class="form-group mt-3">
                    <label for="graduationYear">Tahun Lulus</label>
                    <input type="number" class="form-control" name="graduationYear" id="graduationYear" placeholder="Masukkan tahun lulus Anda">
                </div>
                <div class="form-group mt-3">
                    <label for="major">Jurusan Saat di SMK</label>
                    <input type="text" class="form-control" name="major" id="major" placeholder="Masukkan jurusan Anda di SMK">
                </div>

                <!-- Pendidikan Lanjutan -->
                <h4 class="mt-3"><strong>Pendidikan Lanjutan</strong></h4>
                <div class="form-group mt-3">
                    <label for="furtherStudy">Apakah melanjutkan pendidikan setelah lulus dari SMK?</label>
                    <select class="form-control" id="furtherStudy" name="furtherStudy">
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="institution">Nama Institusi Pendidikan Lanjutan</label>
                    <input type="text" class="form-control" name="institution" id="institution"
                        placeholder="Masukkan nama institusi pendidikan">
                </div>
                <div class="form-group mt-3">
                    <label for="program">Program Studi yang Diambil</label>
                    <input type="text" class="form-control" name="program" id="program" placeholder="Masukkan program studi">
                </div>
                <div class="form-group mt-3">
                    <label for="educationLevel">Jenjang Pendidikan yang Ditempuh</label>
                    <select class="form-control" id="educationLevel" name="educationLevel">
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4/S1">D4/S1</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="educationStatus">Status Pendidikan Saat Ini</label>
                    <select class="form-control" id="educationStatus" name="educationStatus">
                        <option value="Masih kuliah">Masih kuliah</option>
                        <option value="Sudah lulus">Sudah lulus</option>
                        <option value="Drop-out">Drop-out</option>
                    </select>
                </div>

                <!-- Kegiatan Kerja -->
                <h4 class="mt-3"><strong>Kegiatan Kerja</strong></h4>
                <div class="form-group mt-3">
                    <label for="employmentStatus">Status Pekerjaan Saat Ini</label>
                    <select class="form-control" id="employmentStatus" name="employmentStatus">
                        <option value="Bekerja">Bekerja</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Belum bekerja">Belum bekerja</option>
                        <option value="Melanjutkan studi">Melanjutkan studi</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="companyName">Nama Perusahaan atau Tempat Kerja</label>
                    <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Masukkan nama perusahaan">
                </div>
                <div class="form-group mt-3">
                    <label for="industry">Bidang Industri Perusahaan</label>
                    <input type="text" class="form-control" name="industry" id="industry" placeholder="Masukkan bidang industri">
                </div>
                <div class="form-group mt-3">
                    <label for="jobTitle">Jabatan atau Posisi di Tempat Kerja</label>
                    <input type="text" class="form-control" name="jobTitle" id="jobTitle" placeholder="Masukkan jabatan atau posisi">
                </div>
                <div class="form-group mt-3">
                    <label for="startDate">Tanggal Mulai Bekerja</label>
                    <input type="date" class="form-control" name="startDate" id="startDate">
                </div>
                <div class="form-group mt-3">
                    <label for="companyAddress">Alamat Perusahaan</label>
                    <input type="text" class="form-control" name="companyAddress" id="companyAddress"
                        placeholder="Masukkan alamat perusahaan">
                </div>
                <div class="form-group mt-3">
                    <label for="salary">Gaji atau Pendapatan Bulanan</label>
                    <input type="number" class="form-control" name="salary" id="salary"
                        placeholder="Masukkan gaji atau pendapatan bulanan">
                </div>
                <div class="form-group mt-3">
                    <label for="jobMatch">Pekerjaan sesuai dengan jurusan di SMK?</label>
                    <select class="form-control" id="jobMatch" name="jobMatch">
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>

                <!-- Pengalaman Kerja -->
                <h4 class="mt-3"><strong>Pengalaman Kerja</strong></h4>
                <div class="form-group mt-3">
                    <label for="previousJob">Riwayat Pekerjaan Sebelumnya</label>
                    <textarea class="form-control" name="previousJob" id="previousJob" rows="3"
                        placeholder="Tuliskan riwayat pekerjaan sebelumnya jika ada"></textarea>
                </div>

                <!-- Keterampilan dan Kompetensi -->
                <h4 class="mt-3"><strong>Keterampilan dan Kompetensi</strong></h4>
                <div class="form-group mt-3">
                    <label for="skillsFromSMK">Keterampilan yang Diperoleh Selama di SMK yang Bermanfaat di Tempat
                        Kerja</label>
                    <textarea class="form-control" name="skillsFromSMK" id="skillsFromSMK" rows="3"
                        placeholder="Tuliskan keterampilan yang diperoleh di SMK"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="additionalSkills">Keterampilan Tambahan yang Diperoleh Setelah Lulus dari SMK</label>
                    <textarea class="form-control" name="additionalSkills" id="additionalSkills" rows="3"
                        placeholder="Tuliskan keterampilan tambahan yang diperoleh"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="skillsToImprove">Keterampilan yang Dirasa Perlu untuk Ditingkatkan</label>
                    <textarea class="form-control" name="skillsToImprove" id="skillsToImprove" rows="3"
                        placeholder="Tuliskan keterampilan yang perlu ditingkatkan"></textarea>
                </div>

                <!-- Pengalaman Pelatihan -->
                <h4 class="mt-3"><strong>Pengalaman Pelatihan</strong></h4>
                <div class="form-group mt-3">
                    <label for="trainings">Mengikuti Pelatihan atau Kursus Tambahan Setelah Lulus dari SMK</label>
                    <textarea class="form-control" name="trainings" id="trainings" rows="3"
                        placeholder="Tuliskan pelatihan atau kursus yang diikuti"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="certifications">Sertifikasi yang Diperoleh (jika ada)</label>
                    <textarea class="form-control" name="certifications" id="certifications" rows="3" placeholder="Tuliskan sertifikasi yang diperoleh"></textarea>
                </div>

                <!-- Kepuasan Terhadap Pendidikan di SMK -->
                <h4 class="mt-3"><strong>Kepuasan Terhadap Pendidikan di SMK</strong></h4>
                <div class="form-group mt-3">
                    <label for="curriculumSatisfaction">Tingkat Kepuasan terhadap Kurikulum dan Pengajaran di SMK</label>
                    <textarea class="form-control" name="curriculumSatisfaction" id="curriculumSatisfaction" rows="3"
                        placeholder="Tuliskan tingkat kepuasan Anda terhadap kurikulum dan pengajaran"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="facilitiesSatisfaction">Penilaian terhadap Fasilitas dan Lingkungan Belajar di SMK</label>
                    <textarea class="form-control" name="facilitiesSatisfaction" id="facilitiesSatisfaction" rows="3"
                        placeholder="Tuliskan penilaian Anda terhadap fasilitas dan lingkungan belajar"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="suggestions">Saran dan Masukan untuk Perbaikan SMK</label>
                    <textarea class="form-control" name="suggestions" id="suggestions" rows="3" placeholder="Tuliskan saran dan masukan Anda"></textarea>
                </div>

                <!-- Informasi Tambahan -->
                <h4 class="mt-3"><strong>Informasi Tambahan</strong></h4>
                <div class="form-group mb-3">
                    <label for="careerPlans">Rencana Karir Jangka Panjang</label>
                    <textarea class="form-control" name="careerPlans" id="careerPlans" rows="3"
                        placeholder="Tuliskan rencana karir jangka panjang Anda"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="challenges">Hambatan atau Tantangan yang Dihadapi dalam Dunia Kerja</label>
                    <textarea class="form-control" name="challenges" id="challenges" rows="3"
                        placeholder="Tuliskan hambatan atau tantangan yang Anda hadapi"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="advice">Saran untuk Siswa SMK yang Masih Belajar</label>
                    <textarea class="form-control" name="advice" id="advice" rows="3" placeholder="Tuliskan saran Anda untuk siswa SMK"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
@endsection
