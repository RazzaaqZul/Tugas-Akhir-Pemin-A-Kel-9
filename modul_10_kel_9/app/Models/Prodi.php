<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

     // Adam Daffa Aryoseto Putra - 215150700111007
    protected $fillable = [
        'nama',                 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [];

    // Adam Daffa Aryoseto Putra - 215150700111007
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'prodi_Id');
    }
}