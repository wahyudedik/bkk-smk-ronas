@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Career Report</h1>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Biodata Users Data</h5>
                    <div class="table-responsive">
                        <table class="table datatable" id="table3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Nomor Telepon</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Status Alumni</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Pengalaman Kerja</th>
                                    <th>Pengalaman Organisasi</th>
                                    <th>CV PDF</th>
                                    <th>Ijazah PDF</th>
                                    <th>Transkrip Nilai PDF</th>
                                    <th>KTP PDF</th>
                                    <th>KK PDF</th>
                                    <th>Surat Sehat PDF</th>
                                    <th>Foto PDF</th>
                                    <th>Surat Pengalaman Kerja PDF</th>
                                    <th>Sertifikat PDF</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($biodataUsers->sortBy('nama_lengkap') as $biodataUser)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $biodataUser->nama_lengkap }}</td>
                                        <td>{{ $biodataUser->email }}</td>
                                        <td>{{ $biodataUser->nomor_telepon }}</td>
                                        <td>{{ $biodataUser->tanggal_lahir }}</td>
                                        <td>{{ $biodataUser->alamat }}</td>
                                        <td>{{ $biodataUser->status_alumni }}</td>
                                        <td>{{ $biodataUser->pendidikan_terakhir }}</td>
                                        <td>{{ $biodataUser->pengalaman_kerja }}</td>
                                        <td>{{ $biodataUser->pengalaman_organisasi }}</td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->cv_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->ijazah_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->transkrip_nilai_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->ktp_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->kk_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->surat_sehat_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->foto_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->surat_pengalaman_kerja_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="#" onclick="window.open('{{ Storage::url($biodataUser->sertifikat_pdf) }}', '_blank')">Klik untuk melihat</a></td>
                                        <td><a href="{{ Storage::url($biodataUser->image) }}" target="_blank"><img src="{{ Storage::url($biodataUser->image) }}" alt="Image" style="width:auto; height:100px;"></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Careers Data</h5>
                    <div class="table-responsive">
                        <table class="table datatable" id="table4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Career</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careers as $career)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $career->name }}</td>
                                        <td>{{ $career->email }}</td>
                                        <td>{{ $career->phone }}</td>
                                        <td>{{ $career->career }}</td>
                                        <td>{{ $career->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Career Proseses Data Proses</h5>
                    <div class="table-responsive">
                        <table class="table datatable" id="table6">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User ID</th>
                                    <th>Biodata User ID</th>
                                    <th>Career ID</th>
                                    <th>Hasil Administrasi</th>
                                    <th>Psikotes</th>
                                    <th>Interview HRD</th>
                                    <th>Interview User</th>
                                    <th>Tes Kesehatan</th>
                                    <th>Hasil Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careerProses->where('hasil_akhir', 'proses_seleksi') as $careerProses)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $careerProses->user_id }}</td>
                                        <td>{{ $careerProses->biodata_user_id }}</td>
                                        <td>{{ $careerProses->career_id }}</td>
                                        <td>{{ $careerProses->hasil_administrasi }}</td>
                                        <td>{{ $careerProses->psikotes }}</td>
                                        <td>{{ $careerProses->interview_hrd }}</td>
                                        <td>{{ $careerProses->interview_user }}</td>
                                        <td>{{ $careerProses->tes_kesehatan }}</td>
                                        <td>{{ $careerProses->hasil_akhir }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Career Proseses Data Gagal</h5>
                    <div class="table-responsive">
                        <table class="table datatable" id="tableCareerProsesesDataGagal">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User ID</th>
                                    <th>Biodata User ID</th>
                                    <th>Career ID</th>
                                    <th>Hasil Administrasi</th>
                                    <th>Psikotes</th>
                                    <th>Interview HRD</th>
                                    <th>Interview User</th>
                                    <th>Tes Kesehatan</th>
                                    <th>Hasil Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($careerProses::where('hasil_akhir', 'gagal')->get() as $careerProses)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $careerProses->user_id }}</td>
                                        <td>{{ $careerProses->biodata_user_id }}</td>
                                        <td>{{ $careerProses->career_id }}</td>
                                        <td>{{ $careerProses->hasil_administrasi }}</td>
                                        <td>{{ $careerProses->psikotes }}</td>
                                        <td>{{ $careerProses->interview_hrd }}</td>
                                        <td>{{ $careerProses->interview_user }}</td>
                                        <td>{{ $careerProses->tes_kesehatan }}</td>
                                        <td>{{ $careerProses->hasil_akhir }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Career Proseses Data Lulus</h5>
                    <div class="table-responsive">
                        <table class="table datatable" id="tableCareerProsesesDataLulus">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User ID</th>
                                    <th>Biodata User ID</th>
                                    <th>Career ID</th>
                                    <th>Hasil Administrasi</th>
                                    <th>Psikotes</th>
                                    <th>Interview HRD</th>
                                    <th>Interview User</th>
                                    <th>Tes Kesehatan</th>
                                    <th>Hasil Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careerProses::where('hasil_akhir', 'lulus')->get() as $careerProses)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $careerProses->user_id }}</td>
                                        <td>{{ $careerProses->biodata_user_id }}</td>
                                        <td>{{ $careerProses->career_id }}</td>
                                        <td>{{ $careerProses->hasil_administrasi }}</td>
                                        <td>{{ $careerProses->psikotes }}</td>
                                        <td>{{ $careerProses->interview_hrd }}</td>
                                        <td>{{ $careerProses->interview_user }}</td>
                                        <td>{{ $careerProses->tes_kesehatan }}</td>
                                        <td>{{ $careerProses->hasil_akhir }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
