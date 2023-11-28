<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
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

    //Rama Adhitya Widodo Putra - 215150700111052
    public function getMataKuliah()
    {

        $mataKuliah = MataKuliah::all();

        return response()->json([
            'status' => 'Berhasil',
            'message' => 'Data Mata Kuliah Tertampil',
            'matakuliah' => $mataKuliah

        ], 200);
    }

    public function postMatkulMahasiswa(Request $request, $mkId)
    {
        // Mendapatkan nim dari token
        $nim = $request->mahasiswa->nim;

        $mahasiswa = Mahasiswa::find($nim);

        if (!$mahasiswa) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Mahasiswa not found',
            ], 404);
        }

        $mataKuliah = MataKuliah::find($mkId);

        if (!$mataKuliah) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Mata Kuliah not found',
            ], 404);
        }

        // Cek apakah mahasiswa sudah terdaftar pada mata kuliah
        if ($mahasiswa->matakuliah()->where('mkId', $mkId)->exists()) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Mahasiswa sudah terdaftar pada Mata Kuliah ini',
            ], 400);
        }

        // Tambahkan mahasiswa ke dalam mata kuliah
        $mahasiswa->matakuliah()->attach($mkId);

        return response()->json([
            'status' => 'Success',
            'message' => 'Mata Kuliah berhasil ditambahkan pada Mahasiswa',
            'data' => [
                'mahasiswa' => $mahasiswa,
                'mata_kuliah' => $mataKuliah,
            ],
        ], 200);
    }

    public function putMatkulMahasiswa(Request $request, $mkId)
    {
        // Mendapatkan nim dari token
        $nim = $request->mahasiswa->nim;

        $mahasiswa = Mahasiswa::find($nim);

        if (!$mahasiswa) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Mahasiswa not found',
            ], 404);
        }

        $mataKuliah = MataKuliah::find($mkId);

        if (!$mataKuliah) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Mata Kuliah not found',
            ], 404);
        }

        // Cek apakah mahasiswa terdaftar pada mata kuliah
        if (!$mahasiswa->matakuliah()->where('mkId', $mkId)->exists()) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Mahasiswa tidak terdaftar pada Mata Kuliah ini',
            ], 400);
        }

        // Hapus mahasiswa dari mata kuliah
        $mahasiswa->matakuliah()->detach($mkId);

        return response()->json([
            'status' => 'Success',
            'message' => 'Mata Kuliah berhasil dihapus dari Mahasiswa',
            'data' => [
                'mahasiswa' => $mahasiswa,
                'mata_kuliah' => $mataKuliah,
            ],
        ], 200);
    }
}
