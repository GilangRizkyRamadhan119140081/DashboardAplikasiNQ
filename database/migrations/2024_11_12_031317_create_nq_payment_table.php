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
        Schema::create('nq_payment', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('order_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('status', 10)->nullable();
            $table->integer('quantity')->nullable()->default(1);
            $table->string('price')->nullable();
            $table->string('item_id')->nullable();
            $table->string('item_name')->nullable();
            $table->string('customer_first_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('checkout_link')->nullable();
            $table->string('type_payment')->nullable();
            $table->string('type_payment_detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nq_payment');
    }
};
