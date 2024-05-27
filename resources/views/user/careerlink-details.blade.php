@extends('user.app')

@section('content')
    <div class="pagetitle">
        <h1 class="display-4 fw-bold text-uppercase text-center">Detail Peluang Karir</h1>
    </div><!-- End Page Title -->

    <div class="career-details-container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $careerLink->jabatan }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $careerLink->perusahaan->nama_perusahaan }}</h6>
                <div class="tinymce-editor">{!! $careerLink->description!!}</div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="badge bg-primary">{{ $careerLink->jenis_karyawan }}</span>
                    <span class="text-muted">Gaji: Rp{{ number_format($careerLink->gaji, 0, ',', '.') }}</span>
                </div>
                <div class="mt-3">
                    <a href="{{ $careerLink->apply_url }}" class="btn btn-success" target="_blank">Lamar Sekarang</a>
                    <span class="text-muted">Batas waktu:
                        {{ \Carbon\Carbon::parse($careerLink->batas_waktu)->format('d M Y') }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection