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
        Schema::create('fr_jam', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('waktushalat', 14)->nullable();
            $table->string('jam', 5)->nullable();
            $table->string('asma_sa', 27)->nullable();
            $table->string('asma_id', 37)->nullable();
            $table->integer('kadar')->nullable();
            $table->integer('kadarkecil')->nullable();
            $table->string('doa_sa', 77)->nullable();
            $table->string('doa_id', 122)->nullable();
            $table->string('kondisi_sa', 75)->nullable();
            $table->string('kondisi_id', 105)->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('update_at');
            $table->bigInteger('update_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_jam');
    }
};
