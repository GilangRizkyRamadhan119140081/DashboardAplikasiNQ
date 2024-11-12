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
        Schema::create('quran_id', function (Blueprint $table) {
            $table->integer('index', true);
            $table->integer('surah')->default(0);
            $table->integer('ayat')->default(0);
            $table->mediumText('text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quran_id');
    }
};
