@extends('welcome')
@section('content')
<div class="content-panel">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Data Karyawan</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Kode Pegawai</th>
                    <th>Nama Lengkap</th>
                    <th>Divisi</th>
                    <th>Departemen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->kodepegawai }}</td>
                    <td>{{ Str::upper($karyawan->namalengkap) }}</td>
                    <td>{{ $karyawan->divisi }}</td>
                    <td>{{ Str::lower($karyawan->departemen) }}</td>
                    <td>
                        <a href="/karyawan/hapus/{{ $karyawan->kodepegawai }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-4">
        <a href="/karyawan/tambah" class="btn btn-primary">Tambah Karyawan</a>
    </div>
</div>
@endsection
