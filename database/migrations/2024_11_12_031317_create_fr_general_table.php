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
        Schema::create('fr_general', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('var_title', 165)->nullable();
            $table->string('keterangan');
            $table->mediumText('var_value')->nullable();
            $table->bigInteger('user_update');
            $table->dateTime('create_at');
            $table->dateTime('update_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_general');
    }
};
