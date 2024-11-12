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
        Schema::create('fr_asma', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('jam', 2)->nullable();
            $table->string('idx_0', 14)->nullable();
            $table->string('idx_1', 12)->nullable();
            $table->string('idx_2', 11)->nullable();
            $table->string('idx_3', 11)->nullable();
            $table->string('idx_4', 12)->nullable();
            $table->string('idx_5', 27)->nullable();
            $table->string('idx_6', 11)->nullable();
            $table->dateTime('create_at')->useCurrent();
            $table->dateTime('update_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_asma');
    }
};
