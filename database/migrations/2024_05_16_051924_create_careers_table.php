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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perusahaan_id'); // Menambahkan kolom untuk relasi dengan tabel perusahaan
            $table->foreign('perusahaan_id')->references('id')->on('perusahaan'); // Mendefinisikan foreign key
            $table->string('jabatan');
            $table->text('description');
            $table->decimal('gaji', 15, 2); 
            $table->string('jenis_karyawan')->comment('Kontrak, Tetap, Internship/Magang');
            // $table->unsignedBigInteger('proses_recruitment_id'); // Menambahkan kolom untuk relasi dengan tabel careers proses recruitment
            // $table->foreign('proses_recruitment_id')->references('id')->on('careers_proses_recruitment'); // Mendefinisikan foreign key
            $table->date('batas_waktu'); // Menambahkan kolom untuk batas waktu lamaran
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
