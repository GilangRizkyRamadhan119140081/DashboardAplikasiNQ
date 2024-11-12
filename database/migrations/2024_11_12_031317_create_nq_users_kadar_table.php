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
        Schema::create('nq_users_kadar', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('id');
            $table->bigInteger('user_id');
            $table->string('hari_id', 8);
            $table->integer('mod_hari');
            $table->string('jam', 2);
            $table->integer('tanah')->nullable();
            $table->string('tanah_persen', 3)->nullable();
            $table->integer('air');
            $table->string('air_persen', 3);
            $table->integer('udara');
            $table->string('udara_persen', 3);
            $table->integer('api');
            $table->string('api_persen', 3);
            $table->integer('jml_kadar');
            $table->integer('hampa');
            $table->integer('m');
            $table->integer('n');
            $table->integer('h');
            $table->integer('jml_huruf');
            $table->integer('feminim')->nullable();
            $table->integer('maskulin')->nullable();
            $table->string('feminin_persen', 3)->nullable();
            $table->string('maskulin_persen', 3)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nq_users_kadar');
    }
};
