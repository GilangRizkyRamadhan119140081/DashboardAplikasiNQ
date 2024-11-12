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
        Schema::create('nq_counter_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('users_id')->nullable();
            $table->integer('nomor_surat')->nullable();
            $table->string('nama_surat')->nullable();
            $table->integer('nomor_ayat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nq_counter_user');
    }
};
