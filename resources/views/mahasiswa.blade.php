@extends('welcome')
@section('content')
    <div class="content-panel">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Data Mahasiswa</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>IPK</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->NRP }}</td>
                            <td>{{ $mhs->Nama }}</td>
                            <td>{{ $mhs->Jurusan }}</td>
                            <td>{{ $mhs->IPK }}</td>
                            <td>
                                <a href="{{ url('/mahasiswa/view', $mhs->NRP) }}" class="btn btn-primary">Detail</a>
                                <a href="{{ url('/mahasiswa/edit', $mhs->NRP) }}" class="btn btn-success">Edit</a>
                            <td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
