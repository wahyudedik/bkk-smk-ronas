<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerProses extends Model
{
    use HasFactory;

    protected $table = 'careers_proses_recruitment';

    protected $fillable = [
        'user_id',
        'biodata_user_id',
        'career_id', 
        'hasil_administrasi',
        'psikotes',
        'interview_hrd',
        'interview_user',
        'tes_kesehatan',
        'hasil_akhir',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function biodataUser()
    {
        return $this->belongsTo(BiodataUser::class, 'biodata_user_id');
    }

    public function career()
    {
        return $this->belongsTo(Career::class, 'career_id');
    }
}

