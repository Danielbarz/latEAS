@extends('welcome')
@section('content')
    <div class="chat-container">
        @php
            //definisi peta emoticon ke gambar
            $emoticonMap = [
                ':))' => asset('img/1.png'),
                ':3' => asset('img/2.png'),
                ':P' => asset('img/3.png'),
                ':C' => asset('img/4.png'),
                ';)' => asset('img/5.png'),
            ];
        @endphp

        @foreach ($chats as $chat)
            <div class="chat-message">
                @php
                    //pecah kalimat menjadi kata2 berdasarkan spasi
                    $words = explode(' ', $chat->pesan);
                @endphp

                @foreach ($words as $word)
                    @if (isset($emoticonMap[$word]))
                        <img src="{{ $emoticonMap[$word] }}" alt="{{ $word }}">
                    @else
                        {{ $word }}
                    @endif
                    &nbsp; <!-- Tambahkan spasi antar kata -->
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
