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
        Schema::create('keperluan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_keperluan')->unique();
            $table->string('id_siswa')->index();
            // $table->index('id_siswa')->references('id')->on('siswa')->onDelete('cascade');;
            $table->enum('keperluan', ['melanggar aturan', 'keluar sekolah', 'izin', 'terlambat']);
            $table->string('keterangan');
            $table->date('tanggal');
            $table->time('waktu');
            $table->enum('status', ['unconfirm', 'confirmed', 'cancel']);
            $table->rememberToken();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
