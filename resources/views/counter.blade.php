@extends('welcome') {{-- Ganti dengan 'welcome' jika layout Anda bernama itu --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header text-center">Counter Kunjungan</div>
                <div class="card-body text-center">
                    {{-- Tampilkan nilai 'jumlah' yang dikirim dari controller --}}
                    <h3>Anda telah membuka URL ini sebanyak {{ $jumlah }} kali</h3>
                </div>
                <div class="card-footer text-center">
                    © Faizah Johan, 2023
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
