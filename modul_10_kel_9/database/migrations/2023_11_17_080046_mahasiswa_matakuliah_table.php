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
        Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->string('mhsNim');
            $table->unsignedBigInteger('mkId');
            

            $table->foreign('mhsNim')->references('nim')->on('mahasiswas');
            $table->foreign('mkId')->references('id')->on('matakuliahs');
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
