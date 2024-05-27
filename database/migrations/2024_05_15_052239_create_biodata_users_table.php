<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodata_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Menambahkan kolom untuk relasi dengan tabel users
            $table->foreign('user_id')->references('id')->on('users'); // Mendefinisikan foreign key
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('nomor_telepon');
            $table->date('tanggal_lahir');
            $table->string('alamat'); 
            $table->string('status_alumni');
            $table->string('pendidikan_terakhir');
            $table->string('cv_pdf')->nullable();
            $table->string('ijazah_pdf')->nullable();
            $table->string('transkrip_nilai_pdf')->nullable();
            $table->string('ktp_pdf')->nullable();
            $table->string('kk_pdf')->nullable();
            $table->string('surat_sehat_pdf')->nullable();
            $table->string('foto_pdf')->nullable();
            $table->string('surat_pengalaman_kerja_pdf')->nullable();
            $table->text('pengalaman_kerja')->nullable();
            $table->text('pengalaman_organisasi')->nullable();
            $table->string('image')->nullable(); // Menambahkan kolom untuk gambar
            $table->text('sertifikat_pdf')->nullable(); // Menambahkan kolom untuk sertifikat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_users');
    }
};
