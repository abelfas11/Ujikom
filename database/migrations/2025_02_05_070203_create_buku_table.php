<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->string('Id_buku', 10)->primary();
            $table->string('Judul', 50);
            $table->string('Pengarang', 50);
            $table->string('Penerbit', 50);
            $table->year('Tahun_terbit');
            $table->string('Halaman', 50);
            $table->string('Kategori', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}