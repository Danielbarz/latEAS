<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller{
    public function index(){
        $mahasiswaDB = DB::table('mahasiswa')->get();
        return view('mahasiswa', ['mahasiswa' => $mahasiswaDB]);
    }

    public function view($NRP){ // Nama fungsinya diubah menjadi 'view'
    $mahasiswa = DB::table('mahasiswa')->where('NRP', $NRP)->first();
    if (!$mahasiswa) {
        abort(404);
    }
    return view('read', ['mhs' => $mahasiswa]);
}

public function read(){
    $mahasiswaDB = DB::table('mahasiswa')->get();
    return response()->json($mahasiswaDB);
}

public function edit($NRP){
    $mahasiswa = DB::table('mahasiswa')
    ->where('NRP', $NRP)
    ->first();
    return view('edit', ['mhs' => $mahasiswa]);
}

    public function update(Request $request){
        DB::table('mahasiswa')
            ->where('NRP', $request->NRP)
            ->update([
                'NRP' => $request->NRP,
                'Nama' => $request->Nama,
                'Jurusan' => $request->Jurusan,
                'IPK' => $request->IPK
            ]);
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil diupdate');

    }
}
