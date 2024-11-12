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
        Schema::create('fr_quote', function (Blueprint $table) {
            $table->bigInteger('id', true)->index('id');
            $table->mediumText('quote');
            $table->string('from');
            $table->string('title');
            $table->string('image')->nullable();
            $table->timestamp('create_at')->nullable()->useCurrent();
            $table->dateTime('update_at');
            $table->bigInteger('user_update');

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_quote');
    }
};
