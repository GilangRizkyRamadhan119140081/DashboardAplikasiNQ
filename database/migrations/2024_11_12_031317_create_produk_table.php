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
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_produk')->unique();
            $table->string('kategori');
            $table->string('nama_produk');
            $table->text('detail');
            $table->decimal('harga', 10, 0);
            $table->string('link')->nullable();
            $table->unsignedBigInteger('id_user')->index('produk_id_user_foreign');
            $table->string('pemilik');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
