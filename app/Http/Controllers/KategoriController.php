<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Jangan lupa import DB Facade

class KategoriController extends Controller
{
    /**
     * Fungsi ini untuk menampilkan halaman form dengan combo box (dropdown).
     */
    public function showComboForm()
    {
        // 1. Ambil semua data dari tabel 'kategori'
        $kategories = DB::table('kategori')->get();

        // 2. Kirim data tersebut ke file view 'combo.blade.php'
        return view('combo', ['kategories' => $kategories]);
    }

    /**
     * Fungsi ini untuk menangani data yang dikirim dari form
     * dan menampilkan halaman hasil.
     */
    public function handleComboResult(Request $request)
    {
        // 1. Ambil ID yang dipilih dari combo box.
        //    Nama 'kategori_id' akan kita definisikan di form nanti.
        $selectedId = $request->input('kategori_id');

        // 2. Cek jika pengguna tidak memilih apa-apa
        if (is_null($selectedId)) {
            return redirect('/combo')->with('error', 'Anda harus memilih salah satu kategori!');
        }

        // 3. Kirim ID yang sudah terpilih itu ke file view 'hasil.blade.php'
        return view('hasil', ['selectedId' => $selectedId]);
    }
}
