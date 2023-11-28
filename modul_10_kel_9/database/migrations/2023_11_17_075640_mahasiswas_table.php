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
        Schema::create('mahasiswas', function (Blueprint $table) {

            $table->string('nim', 15)->primary();

            $table->unsignedBigInteger('prodiId');
            $table->string('nama');
            $table->integer('angkatan');
            $table->string('password');
            // $table->string('token')->unique()->nullable();

            $table->foreign('prodiId')->references('id')->on('prodis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
