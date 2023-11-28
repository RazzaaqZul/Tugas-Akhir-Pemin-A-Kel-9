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

    //  Muhammad Razzaaq Zulkahfi - 215150700111047
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
       //  Muhammad Razzaaq Zulkahfi - 215150700111047
    protected $hidden = [
        'password', 'token'
    ];

       //  Muhammad Razzaaq Zulkahfi - 215150700111047
    public function prodi()
    {
         //  Muhammad Razzaaq Zulkahfi - 215150700111047
        return $this->belongsTo(Prodi::class, 'prodiId');
    }

    public function matakuliah()
    {
         //  Muhammad Razzaaq Zulkahfi - 215150700111047
        return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matakuliah', 'mhsNim', 'mkId');
    }
}
