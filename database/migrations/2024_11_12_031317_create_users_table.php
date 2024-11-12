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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id')->nullable()->index('users_role_id_foreign');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->unsignedBigInteger('referal_id')->nullable()->index('users_referal_id_foreign');
            $table->string('referal_code')->nullable();
            $table->string('referal_from', 50)->nullable();
            $table->string('nomor_hp')->nullable();
            $table->text('alamat')->nullable();
            $table->string('image')->nullable();
            $table->string('kode_voucher')->nullable();
            $table->string('kode_paket')->nullable();
            $table->date('expired')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
