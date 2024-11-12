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
        Schema::create('fr_jam2', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('id');
            $table->string('jam', 2)->nullable();
            $table->string('asma_sa', 27)->nullable();
            $table->string('asma_id', 37)->nullable();
            $table->integer('mod_hari')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('update_at');
            $table->bigInteger('update_user');

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_jam2');
    }
};
