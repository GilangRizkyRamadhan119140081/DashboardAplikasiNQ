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
        Schema::create('nq_quran', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('surah')->default(0);
            $table->integer('ayat')->default(0);
            $table->mediumText('ayat_sa');
            $table->mediumText('ayat_lt')->nullable();
            $table->mediumText('ayat_id');
            $table->mediumText('tafsir_id')->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->dateTime('update_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nq_quran');
    }
};
