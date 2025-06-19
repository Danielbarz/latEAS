<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB Facade

class KaryawanController extends Controller{

    /**
     * Menampilkan daftar karyawan.
     */
    public function index()
    {
        // Ambil semua data karyawan dari tabel 'karyawan'
        $karyawan = DB::table('karyawan')->get();

        // Kirim data ke view 'karyawan.index'
        return view('karyawan', ['karyawans' => $karyawan]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kodepegawai'   => 'required|size:5|unique:karyawan,kodepegawai',
            'namalengkap'   => 'required|max:50',
            'divisi'        => 'required|max:55',
            'departemen'    => 'required|max:10',
        ]);

        // Simpan data karyawan ke database
        DB::table('karyawan')->insert([
            'kodepegawai'   => $request->kodepegawai,
            'namalengkap'   => $request->namalengkap,
            'divisi'        => $request->divisi,
            'departemen'    => $request->departemen,
        ]);

        // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect('/karyawan')
        ->route('index')
        ->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function hapus($kodepegawai)
    {
        // Hapus karyawan berdasarkan kodepegawai
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();

        // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect('/karyawan')
        ->with('success', 'Karyawan berhasil dihapus!');
    }
}
