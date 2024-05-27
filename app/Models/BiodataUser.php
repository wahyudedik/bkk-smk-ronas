<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataUser extends Model
{
    use HasFactory;

protected $table = 'biodata_users';

protected $fillable = [
    'user_id',
    'nama_lengkap', 
    'email',
    'nomor_telepon',
    'tanggal_lahir',
    'alamat',
    'status_alumni',
    'pendidikan_terakhir',
    'cv_pdf',
    'ijazah_pdf',
    'transkrip_nilai_pdf',
    'ktp_pdf',
    'kk_pdf',
    'surat_sehat_pdf',
    'foto_pdf',
    'surat_pengalaman_kerja_pdf',
    'pengalaman_kerja',
    'pengalaman_organisasi',
    'image',
    'sertifikat_pdf'
];

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
}
