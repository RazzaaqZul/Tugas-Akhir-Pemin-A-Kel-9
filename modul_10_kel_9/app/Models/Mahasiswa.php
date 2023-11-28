<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $primaryKey = 'nim';
    public $timestamps = false;

    protected $fillable = [
        'prodiId',
        'mataKuliah_Id',
        'NIM',
        'nama',
        'angkatan',
        'password',

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password', 'token'
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodiId');
    }

    public function matakuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matakuliah', 'mhsNim', 'mkId');
    }
}
