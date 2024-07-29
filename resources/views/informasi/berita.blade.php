@extends('layouts.app')

@section('content')
    <section id="profil-section">
        <div class="container">
            <h2>BERITA & PENGUMUMAN</h2>
            <div id="elements-container">
                @php
                    $count = 0;
                @endphp
                @foreach ($berita as $b)
                    @if ($count % 3 == 0)
                        @if ($count > 0)
                            </div>
                        @endif
                        <div class="elements-box">
                    @endif
                <a class="berita-card" href="{{ route('informasi.info', ['id' => $b->id]) }}">
                    <div class="berita-card-img">
                        <img src="images/image1.jpg" alt="berita" class="berita-img">
                    </div>
                    <div class="berita-card-text-box">
                        <text class="berita-title medium-label">{{ $b->judul }}</text>
                        <text class="berita-date">{{ $b->tanggal }}</text>
                    </div>
                </a>
                @php
                    $count++;
                @endphp
                @endforeach
                @if ($count % 3 != 0)
                    </div>
                @endif
            </div>
            <pagination class="pagination">{{ $berita->links() }}</pagination>
        </div>
    </section>
@endsection
