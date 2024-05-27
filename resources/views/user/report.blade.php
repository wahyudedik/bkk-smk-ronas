@extends('user.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Report</h1>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Details Career Process</h2>
        </div>
        <div class="card-body">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Hasil Administrasi</th>
                                    <th>Psikotes</th>
                                    <th>Interview HRD</th>
                                    <th>Interview User</th>
                                    <th>Tes Kesehatan</th> 
                                    <th>Hasil Akhir</th>
                                    <th>Nama - Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careerProseses as $careerProses)
                                    @if ($careerProses->biodataUser->user_id == Auth::user()->id && $careerProses->hasil_akhir == 'proses_seleksi')
                                        <tr>
                                            <td>{{ $careerProses->created_at->format('d M Y') }}</td>
                                            <td>{{ $careerProses->hasil_administrasi }}</td>
                                            <td>{{ $careerProses->psikotes }}</td>
                                            <td>{{ $careerProses->interview_hrd }}</td>
                                            <td>{{ $careerProses->interview_user }}</td>
                                            <td>{{ $careerProses->tes_kesehatan }}</td>
                                            <td>{{ $careerProses->hasil_akhir }}</td>
                                            <td>{{ $careerProses->biodataUser->nama_lengkap }} - {{ $careerProses->career->jabatan }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Recent Activity -->
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>History Career</h2>
        </div>
        <div class="card-body">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Hasil Administrasi</th>
                                    <th>Psikotes</th>
                                    <th>Interview HRD</th>
                                    <th>Interview User</th>
                                    <th>Tes Kesehatan</th> 
                                    <th>Hasil Akhir</th>
                                    <th>Nama - Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careerProseses as $careerProses)
                                    @if ($careerProses->biodataUser->user_id == Auth::user()->id)
                                        @if ($careerProses->hasil_akhir == 'lulus')
                                            <tr>
                                                <td>{{ $careerProses->created_at->format('d M Y') }}</td>
                                                <td>{{ $careerProses->hasil_administrasi }}</td>
                                                <td>{{ $careerProses->psikotes }}</td>
                                                <td>{{ $careerProses->interview_hrd }}</td>
                                                <td>{{ $careerProses->interview_user }}</td>
                                                <td>{{ $careerProses->tes_kesehatan }}</td>
                                                <td>{{ $careerProses->hasil_akhir }}</td>
                                                <td>{{ $careerProses->biodataUser->nama_lengkap }} - {{ $careerProses->career->jabatan }}</td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Recent Activity -->
        </div>
    </div>
@endsection
