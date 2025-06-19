@extends('welcome')

@section('content')
    <div class="content-panel">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Edit Data Mahasiswa</h1>
        </div>

        {{-- @foreach tidak diperlukan karena kita hanya mengedit SATU data --}}

        {{-- Form action bisa diarahkan langsung ke URL proses update --}}
        {{-- Kita menggunakan variabel $mhs yang dikirim dari controller --}}
        <form action="{{ url('/mahasiswa/update') }}" method="POST">
            @csrf
            @method('PUT') {{-- Jangan lupa method PUT untuk update --}}

            <div class="form-group mb-3">
                <label for="NRP">NRP</label>
                {{-- NRP tidak boleh diubah (readonly), tapi nilainya tetap dibutuhkan
                     untuk dikirim ke controller pada proses update --}}
                <input type="text" class="form-control" id="NRP" name="NRP" value="{{ $mhs->NRP }}" readonly>
            </div>

            <div class="form-group mb-3">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $mhs->Nama }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="Jurusan">Jurusan</label>
                <input type="text" class="form-control" id="Jurusan" name="Jurusan" value="{{ $mhs->Jurusan }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="IPK">IPK</label>
                <input type="text" class="form-control" id="IPK" name="IPK" value="{{ $mhs->IPK }}" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>

    </div>
@endsection
