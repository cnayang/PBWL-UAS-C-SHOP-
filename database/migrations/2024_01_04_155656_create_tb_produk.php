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
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->tinyIncrements('produk_id');
            $table->string('produk_nama', 50);
            $table->text('produk_deskripsi');
            $table->string('produk_harga', 50);
            $table->unsignedTinyInteger('produk_id_kat');
            $table->foreign('produk_id_kat')->references('kat_id')->on('tb_kategori')->onUpdate('Cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_produk');
    }
};
