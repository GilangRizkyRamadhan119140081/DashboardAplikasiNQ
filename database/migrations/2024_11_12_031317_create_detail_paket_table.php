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
        Schema::create('detail_paket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_paket')->index('detail_paket_id_paket_foreign');
            $table->string('kode_paket');
            $table->integer('hari');
            $table->decimal('harga', 10, 0);
            $table->string('link')->nullable();
            $table->mediumText('deskripsi1')->nullable();
            $table->string('deskripsi2')->nullable();
            $table->string('deskripsi3')->nullable();
            $table->string('deskripsi4')->nullable();
            $table->string('deskripsi5')->nullable();
            $table->string('deskripsi6')->nullable();
            $table->string('deskripsi7')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_paket');
    }
};
