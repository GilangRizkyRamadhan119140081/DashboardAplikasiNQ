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
        Schema::create('setup_paket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user')->index('setup_paket_id_user_foreign');
            $table->unsignedBigInteger('id_paket')->index('setup_paket_id_paket_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setup_paket');
    }
};
