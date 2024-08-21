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
        Schema::table('color_gown', function (Blueprint $table) {
            $table->id();
            $table->integer('color_id');
            $table->integer('gown_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('color_gown', function (Blueprint $table) {
            $table->id();
            $table->integer('color_id');
            $table->integer('gown_id');
        });
    }
};
