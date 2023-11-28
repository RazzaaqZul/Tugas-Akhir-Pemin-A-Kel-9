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
                // Membuat tabel
                // Adam Daffa Aryoseto Putra - 215150700111007
                Schema::create('matakuliahs', function(Blueprint $table) {
                    $table->id();
                    $table->string('nama');
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
