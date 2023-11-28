<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    // Rama Adhitya Widodo Putra - 215150700111052
    protected $table = 'matakuliahs';

    protected $fillable = [
        'nama',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [];
}