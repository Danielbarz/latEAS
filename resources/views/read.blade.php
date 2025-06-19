@extends('welcome')

@section('content')
    <div class="content-panel">
        <h1 class="h3 mb-4">Detail Mahasiswa</h1>

        {{-- Menampilkan data dari variabel $mhs yang dikirim controller --}}
        <p><strong>NRP:</strong> {{ $mhs->NRP }}</p>
        <p><strong>Nama:</strong> {{ $mhs->Nama }}</p>
        <p><strong>Jurusan:</strong> {{ $mhs->Jurusan }}</p>
        <p><strong>IPK:</strong> {{ $mhs->IPK }}</p>

        <br>

        {{-- Tombol untuk kembali ke halaman daftar --}}
        <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Kembali ke Daftar Mahasiswa</a>
    </div>
@endsection
