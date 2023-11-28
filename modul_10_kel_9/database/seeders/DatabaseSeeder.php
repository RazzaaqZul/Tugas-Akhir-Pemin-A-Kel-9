<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Adam Daffa Aryoseto Putra - 215150700111007
        $this->call([
            ProdiSeeder::class,
            MataKuliahSeeder::class
        ]);
    }
}
