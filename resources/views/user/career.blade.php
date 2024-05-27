@extends('user.app')

@section('content')
    <div class="pagetitle">
        <h1 class="display-4 fw-bold">Career Opportunities</h1>
    </div><!-- End Page Title -->

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

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

    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
        @if ($careers->isEmpty())
            <div class="alert alert-info" role="alert">
                Tidak ada loker yang tersedia saat ini.
            </div>
        @else
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">Daftar Loker</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @foreach ($careers->reverse() as $career)
                        @php($latest = $career->created_at->eq($career->first()->created_at))
                        <div class="list-group">
                            <a href="{{ route('user.career.detail', ['id' => $career->id, 'jabatan' => $career->jabatan, 'perusahaan' => $career->perusahaan->nama_perusahaan]) }}"
                                class="list-group-item list-group-item-action {{ $latest ? 'border-primary' : '' }}">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $career->jabatan }}</h5>
                                    <small
                                        style="color: {{ \Carbon\Carbon::now()->lessThan(\Carbon\Carbon::parse($career->batas_waktu)) ? 'green' : 'red' }}">
                                        {{ \Carbon\Carbon::parse($career->batas_waktu)->format('d M Y') }}
                                    </small>
                                </div>
                                <p class="mb-1">{{ $career->perusahaan->nama_perusahaan }}</p>
                                <small class="text-muted">Diposting pada {{ $career->created_at->format('d M Y') }}</small>
                                <small class="text-muted">Gaji: Rp{{ number_format($career->gaji, 2, ',', '.') }}</small>
                            </a>
                        </div>
                    @endforeach
                    <div class="mt-4">
                        @if (method_exists($careers, 'links'))
                            {{ $careers->links('vendor.pagination.default', ['elements' => $careers->forPage(1, 10)]) }}
                        @endif
                    </div>
                </div>
            </div>
        @endif

    </div>

    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
        @if ($careerLinks->isEmpty())
            <div class="alert alert-info" role="alert">
                Tidak ada loker yang tersedia saat ini.
            </div>
        @else
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">Daftar
                        LokerLink</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @foreach ($careerLinks as $careerLink)
                        <div class="list-group">
                            <a href="{{ route('career.link.detail', ['career' => $careerLink->id, 'user_id' => auth()->id()]) }}"
                                class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $careerLink->jabatan }}</h5>
                                    <small
                                        style="color: {{ \Carbon\Carbon::now()->lessThan(\Carbon\Carbon::parse($careerLink->batas_waktu)) ? 'green' : 'red' }}">
                                        {{ \Carbon\Carbon::parse($careerLink->batas_waktu)->format('d M Y') }}
                                    </small>
                                </div>
                                <p class="mb-1">{{ $careerLink->perusahaan->nama_perusahaan }}</p>
                                <small class="text-muted">Diposting pada
                                    {{ $careerLink->created_at->format('d M Y') }}</small>
                                <small class="text-muted">Gaji:
                                    Rp{{ number_format($careerLink->gaji, 2, ',', '.') }}</small>
                            </a>
                        </div>
                    @endforeach
                    <div class="mt-4">
                        @if (method_exists($careerLinks, 'links'))
                            {{ $careerLinks->links('vendor.pagination.default', ['elements' => $careersLinks->forPage(1, 10)]) }}
                        @endif
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection
