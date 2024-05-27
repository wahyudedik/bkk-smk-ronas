@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Create Career</h1>
    </div><!-- End Page Title -->

<div class="card">
    <div class="card-header">
        <h4>Input Data Career</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.career.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="perusahaan_id" class="form-label">Perusahaan</label>
                <select class="form-select" id="perusahaan_id" name="perusahaan_id" required>
                    {{-- Loop through perusahaan data --}}
                    @foreach ($perusahaan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_perusahaan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="tinymce-editor" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="gaji" class="form-label">Gaji</label>
                <input type="text" class="form-control" id="gaji" name="gaji" required placeholder="Contoh: Rp1.000.000,00" onkeyup="formatRupiah(this, 'Rp')">
            </div>
            <div class="mb-3">
                <label for="jenis_karyawan" class="form-label">Jenis Karyawan</label>
                <select class="form-select" id="jenis_karyawan" name="jenis_karyawan" required>
                    <option value="Kontrak">Kontrak</option>
                    <option value="Tetap">Tetap</option>
                    <option value="Internship/Magang">Internship/Magang</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="batas_waktu" class="form-label">Batas Waktu Lamaran</label>
                <input type="date" class="form-control" id="batas_waktu" name="batas_waktu" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
