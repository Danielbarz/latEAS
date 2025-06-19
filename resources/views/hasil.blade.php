@extends('welcome') {{-- Ganti dengan 'welcome' jika layout Anda bernama itu --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Hasil Pilihan</div>
                <div class="card-body">
                    {{-- Tampilkan ID yang dikirim dari controller --}}
                    <h3>Anda telah memilih Kategori dengan Kode : {{ $selectedId }}</h3>
                    <br>
                    <a href="{{ url('/combo') }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="card-footer text-center">
                    © Faizah Johan, 2023
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
