@extends('template')
@section('content')

    <div class="content-panel">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Form Tambah Data Karyawan</h3>
            <a href="/karyawan" class="btn btn-secondary"> &larr; Kembali</a>
        </div>

        {{-- Menampilkan pesan error validasi jika ada --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Terjadi beberapa masalah dengan inputan Anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action={{ url('/karyawan/store') }} method="POST">
            {{ csrf_field() }}
            <div class= "row mb-3">
                <label for= "kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kodepegawai" name="kodepegawai"
                        placeholder="Masukkan Kode Pegawai" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap"
                        placeholder="Masukkan Nama Lengkap" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-10">
                    <select class="form-select" id="divisi" name="divisi" required>
                        <option value="">-- Pilih Divisi --</option>
                        <option value="IT">IT</option>
                        <option value="HRD">HRD</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Finance">Finance</option>
                        <option value="Operasional">Operasional</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="departemen" name="departemen"
                        placeholder="Masukkan Departemen" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
