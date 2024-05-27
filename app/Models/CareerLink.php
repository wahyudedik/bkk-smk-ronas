<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerLink extends Model
{
    use HasFactory;

protected $table = 'careers_links';

protected $fillable = [
    'perusahaan_id',
    'jabatan',
    'description',
    'gaji',
    'jenis_karyawan',
    'apply_url',
    'batas_waktu' // Menambahkan field 'batas_waktu' ke dalam array fillable
];

public function perusahaan()
{
    return $this->belongsTo(Perusahaan::class, 'perusahaan_id');
}
}
