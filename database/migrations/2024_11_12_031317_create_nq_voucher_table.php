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
        Schema::create('nq_voucher', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('user_used')->nullable();
            $table->string('voucher_code')->nullable()->unique('voucher_code');
            $table->date('voucher_expire')->nullable();
            $table->bigInteger('paket_id');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->unique(['voucher_code'], 'voucher_code_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nq_voucher');
    }
};
