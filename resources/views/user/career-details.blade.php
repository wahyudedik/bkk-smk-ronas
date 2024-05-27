@extends('user.app')

@section('content')
    <div class="pagetitle">
        <h1 class="display-4 fw-bold text-uppercase text-center">Peluang Karir</h1>
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

    <div class="career-details-container">
        <h2 class="text-center mb-4">Detail Peluang Karir</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $career->jabatan }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $career->perusahaan->nama_perusahaan }}</h6>
                <div class="tinymce-editor">{!! $career->description!!}</div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="badge bg-primary">{{ $career->jenis_karyawan }}</span>
                    <span class="text-muted">Gaji: Rp{{ number_format($career->gaji, 0, ',', '.') }}</span>
                </div>
                <div class="mt-3"> 
                    @if ($userApplied)
                        <button type="button" class="btn btn-success" disabled>
                            Lamar Sekarang
                        </button>
                    @else
                        <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('user.career.biodata', ['id' => $career->id]) }}'">
                            Lamar Sekarang
                        </button>
                    @endif
                    <span class="text-muted">Batas waktu:
                        {{ \Carbon\Carbon::parse($career->batas_waktu)->format('d M Y') }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection