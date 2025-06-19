@extends('welcome') {{-- Ganti dengan 'welcome' jika layout Anda bernama itu --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">Pilih Kategori</div>
                <div class="card-body">
                    {{-- Form ini akan mengirim data ke URL /hasilcombo dengan method GET --}}
                    <form action="{{ url('/hasilcombo') }}" method="GET">

                        <div class="form-group mb-3">
                            <label for="kategori_id">Pilih Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control" required>
                                <option value="">-- Silakan Pilih --</option>
                                {{-- Lakukan perulangan untuk data kategori dari controller --}}
                                @foreach ($kategories as $kategori)
                                    {{-- Sesuai soal: value adalah ID, yang ditampilkan adalah Nama --}}
                                    <option value="{{ $kategori->ID }}">{{ $kategori->Nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">KIRIM</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    © Bara, 2025
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
