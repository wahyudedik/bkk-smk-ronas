@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Seleksi</h1>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Seleksi</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.career.seleksi.update', $seleksi->id) }}" method="POST">
                @csrf
                @method('PUT')
                @php
                    $statuses = [
                        'hasil_administrasi',
                        'psikotes',
                        'interview_hrd',
                        'interview_user',
                        'tes_kesehatan',
                        'hasil_akhir'
                    ];
                @endphp

                @foreach ($statuses as $status)
                    <div class="form-group mb-3">
                        <label for="{{ $status }}" class="label-control">{{ ucwords(str_replace('_', ' ', $status)) }}</label>
                        <select name="{{ $status }}" id="{{ $status }}" class="form-control">
                            <option value="lulus" {{ $seleksi->{$status} === 'lulus' ? 'selected' : '' }}>Lulus</option>
                            <option value="proses_seleksi" {{ $seleksi->{$status} === 'proses_seleksi' ? 'selected' : '' }}>Proses Seleksi</option>
                            <option value="gagal" {{ $seleksi->{$status} === 'gagal' ? 'selected' : '' }}>Gagal</option>
                        </select>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection