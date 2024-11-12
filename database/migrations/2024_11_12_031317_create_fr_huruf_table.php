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
        Schema::create('fr_huruf', function (Blueprint $table) {
            $table->integer('id')->unique('id');
            $table->string('huruf', 1)->nullable();
            $table->integer('kadar')->nullable();
            $table->integer('hoki')->nullable();
            $table->string('gender', 8)->nullable();
            $table->string('makna_id', 21)->nullable();
            $table->string('makna_sa', 10)->nullable();
            $table->string('unsur_id', 5)->nullable();
            $table->string('huruf_unsur_a', 5)->nullable();
            $table->string('organ_id', 14)->nullable();
            $table->string('organ_sa', 17)->nullable();
            $table->string('huruf_terjemah', 129)->nullable();
            $table->string('huruf_rahasia', 49)->nullable();
            $table->string('asma', 29)->nullable();
            $table->string('malaikat', 23)->nullable();
            $table->string('malaikat_pendamping', 67)->nullable();
            $table->string('huruf_kehormatan_i', 43)->nullable();
            $table->string('huruf_kehormatan_a', 12)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_huruf');
    }
};
