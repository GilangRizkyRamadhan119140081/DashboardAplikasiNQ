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
        Schema::create('nq_payment_detail', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('order_id')->nullable();
            $table->string('item_name')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('total')->nullable();
            $table->bigInteger('total_final')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nq_payment_detail');
    }
};
