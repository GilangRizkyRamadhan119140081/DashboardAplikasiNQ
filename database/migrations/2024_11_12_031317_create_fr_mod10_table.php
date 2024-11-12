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
        Schema::create('fr_mod10', function (Blueprint $table) {
            $table->integer('mod10_id')->index('mod10_id');
            $table->string('mod10_char', 622)->nullable();
            $table->string('mod10_subchar', 172)->nullable();
            $table->string('mod10_color', 54)->nullable();
            $table->string('mod10_ide_konsep', 60)->nullable();
            $table->string('mod10_intel_smart', 83)->nullable();
            $table->string('mod10_multi_smart', 52)->nullable();
            $table->string('mod10_sifat', 43)->nullable();
            $table->string('mod10_way_think', 52)->nullable();
            $table->string('mod10_way_learn', 640)->nullable();
            $table->string('mod10_school_path', 236)->nullable();
            $table->string('mod10_focus_learn', 515)->nullable();
            $table->string('mod10_minat', 506)->nullable();
            $table->string('mod10_bakat', 581)->nullable();
            $table->string('mod10_hobby', 63)->nullable();
            $table->string('mod10_sos_con', 64)->nullable();
            $table->string('mod10_fem_mas', 50)->nullable();
            $table->string('mod10_empati', 68)->nullable();
            $table->string('mod10_feel', 29)->nullable();
            $table->string('mod10_fam_rel', 71)->nullable();
            $table->string('mod10_exp_mencintai', 34)->nullable();
            $table->string('mod10_exp_dicintai', 28)->nullable();
            $table->string('mod10_bisnis', 98)->nullable();
            $table->string('mod10_trade', 59)->nullable();
            $table->string('mod10_job', 117)->nullable();
            $table->string('mod10_position', 60)->nullable();
            $table->string('mod10_organ', 11)->nullable();
            $table->string('mod10_func', 101)->nullable();
            $table->string('mod10_illness', 72)->nullable();
            $table->string('mod10_cause', 97)->nullable();
            $table->string('mod10_gejala', 52)->nullable();
            $table->string('mod10_keluhan', 66)->nullable();
            $table->string('mod10_therapy', 84)->nullable();
            $table->string('mod10_handling', 17)->nullable();
            $table->string('mod10_digest', 75)->nullable();
            $table->string('mod10_sport', 83)->nullable();

            $table->unique(['mod10_id'], 'mod10_id_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_mod10');
    }
};
