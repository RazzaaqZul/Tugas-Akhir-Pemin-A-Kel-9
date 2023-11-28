<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class MahasiswaController extends Controller
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
    //  Muhammad Razzaaq Zulkahfi - 215150700111047
    // GET ALL MAHASISWA
    public function getMahasiswa(Request $request)
    {

        $mahasiswa = Mahasiswa::with('prodi')->get();

        return response()->json([
            'status' => 'Berhasil',
            'message' => 'Seluruh Data Mata Kuliah Tertampil',
            'mahasiswa' => $mahasiswa

        ], 200);
    }
    
    //  Muhammad Razzaaq Zulkahfi - 215150700111047
    // GET MAHASISWA BY TOKEN
    public function getMahasiswaByToken(Request $request)
    {

        return response()->json([
            'status' => 'Berhasil',
            'message' => 'Berhasil diambil dari token',
            'mahasiswa' => $request->mahasiswa

        ], 200);
    }

    //  Muhammad Razzaaq Zulkahfi - 215150700111047
    // GET MAHASISWA BY NIM
    public function getMahasiswaByNIM(Request $request, $nim)
    {

        $mahasiswa = Mahasiswa::where('nim', $nim)->with('prodi', 'matakuliah')->first();

        if ($mahasiswa) {
            return response()->json([
                'status' => 'Success',
                'message' => "Mahasiswa dengan nim $nim tertampil",
                'mahasiswa' => $mahasiswa,
            ], 200);
        } else {
            return response()->json([
                'status' => 'Error',
                'message' => "Mahasiswa dengan nim $nim tidak ditemukan",
            ], 404);
        }
    }
}
