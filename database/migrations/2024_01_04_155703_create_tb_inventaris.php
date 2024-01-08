<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_inventaris', function (Blueprint $table) {
            $table->tinyIncrements('inv_id');
            $table->unsignedTinyInteger('inv_id_produk');
            $table->mediumInteger('jumlah');
            $table->string('tgl_penyegaran_terakhir', 50);
            $table->foreign('inv_id_produk')->references('produk_id')->on('tb_produk')->onUpdate('Cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_inventaris');
    }
};
