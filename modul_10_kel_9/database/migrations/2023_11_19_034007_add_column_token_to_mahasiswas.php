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
        // Adam Daffa Aryoseto Putra - 215150700111007
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->string('token')->unique()->nullable(); //
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Adam Daffa Aryoseto Putra - 215150700111007
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->dropIfExists('token'); //
        });
    }
};
