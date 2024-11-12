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
        Schema::table('detail_paket', function (Blueprint $table) {
            $table->foreign(['id_paket'])->references(['id'])->on('master_paket')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_paket', function (Blueprint $table) {
            $table->dropForeign('detail_paket_id_paket_foreign');
        });
    }
};
