<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Jangan lupa import DB Facade

class CounterController extends Controller
{
    /**
     * Fungsi untuk menampilkan halaman counter.
     * Semua logika terjadi di sini.
     */
    public function index()
    {
        // Kita akan selalu bekerja pada record dengan ID = 1
        $counterId = 1;

        // Langkah 1: Lakukan operasi UPDATE untuk menambah nilai 'Jumlah' sebesar 1.
        // Laravel punya fungsi increment() yang sangat efisien untuk ini.
        DB::table('counter')->where('ID', $counterId)->increment('Jumlah');

        // Langkah 2: Setelah di-update, BACA kembali record tersebut untuk mendapatkan nilai terbaru.
        // Kita gunakan first() karena kita tahu hanya ada satu record.
        $counterData = DB::table('counter')->where('ID', $counterId)->first();

        // Ambil hanya nilai jumlahnya saja
        $jumlahTerkini = $counterData->Jumlah;

        // Langkah 3: Kirim nilai terbaru itu ke view.
        return view('counter', ['jumlah' => $jumlahTerkini]);
    }
}
