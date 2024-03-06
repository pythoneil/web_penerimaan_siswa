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
        Schema::create('pendaftaran_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('telephon');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->string('agama');
            $table->string('jarak_rumah_kesekolah');
            $table->string('total_nilai_rata_rata');
            $table->string('nama_ayah');
            $table->string('alamat_ayah');
            $table->string('nomor_telpon_ayah');
            $table->string('pendidikan_terakhir_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_ibu');
            $table->string('nomor_telpon_ibu');
            $table->string('pendidikan_terakhir_ibu');
            $table->string('upload_file_kk');
            $table->string('upload_file_akte');
            $table->string('upload_file_kip');
             $table->tinyInteger('status_data')->default('1');
             $table->tinyInteger('status')->default('1');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_siswa');
    }
};
