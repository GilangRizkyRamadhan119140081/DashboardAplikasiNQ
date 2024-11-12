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
        Schema::create('nq_akses_paket', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('id_akses');
            $table->integer('paket_id')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nq_akses_paket');
    }
};
