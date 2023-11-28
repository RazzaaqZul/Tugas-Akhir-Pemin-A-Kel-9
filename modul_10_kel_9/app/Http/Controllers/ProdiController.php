<?php

namespace App\Http\Controllers;
use App\Models\Prodi;

class ProdiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Adam Daffa Aryoseto Putra - 215150700111007
    public function getProdi(){
        $prodi = Prodi::all();
        return response()->json([
            'status' => 'Berhasil',
            'message' => 'Data Prodi Tertampil',
            'prodi' => $prodi
            ], 200);
    }

    //
}