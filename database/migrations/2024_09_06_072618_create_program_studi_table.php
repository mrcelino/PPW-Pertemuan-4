<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramStudiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_studi', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('kode')->unique(); // Kode unik program studi
            $table->string('nama'); // Nama program studi
            $table->string('fakultas'); // Fakultas yang menaungi program studi
            $table->string('akreditasi')->default('Belum Terakreditasi'); // Status akreditasi program studi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_studi'); // Menghapus tabel jika rollback
    }
}
