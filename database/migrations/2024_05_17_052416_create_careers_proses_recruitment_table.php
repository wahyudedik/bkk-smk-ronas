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
        Schema::create('careers_proses_recruitment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('biodata_user_id');
            $table->foreign('biodata_user_id')->references('id')->on('biodata_users');
            $table->unsignedBigInteger('career_id'); // Menambahkan id dari tabel careers
            $table->foreign('career_id')->references('id')->on('careers'); // Mendefinisikan foreign key untuk tabel careers
            $table->string('hasil_administrasi')->default('proses_seleksi'); // Menambahkan kolom untuk hasil administrasi dengan default 'proses_seleksi'
            $table->string('psikotes')->default('proses_seleksi'); // Menandakan apakah psikotes telah dilakukan
            $table->string('interview_hrd')->default('proses_seleksi'); // Menandakan apakah interview HRD telah dilakukan
            $table->string('interview_user')->default('proses_seleksi'); // Menandakan apakah interview user telah dilakukan
            $table->string('tes_kesehatan')->default('proses_seleksi'); // Menandakan apakah tes kesehatan telah dilakukan
            $table->string('hasil_akhir')->default('proses_seleksi'); // Menandakan apakah penerimaan telah dilakukan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('careers_proses_recruitment');
    }
};
