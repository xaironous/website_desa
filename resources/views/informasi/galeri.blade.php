@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
        <h2>GALERI FOTO DESA SUKOLILO</h2>
        <div class="elements-container">
            @php
                $count = 0;
            @endphp
            @foreach ($foto as $f)
                @if ($count % 2 == 0)
                    @if ($count > 0)
                        </div>
                    @endif
                    <div class="elements-box">
                @endif
            <div class="galeri-foto-card">
                <img src="{{asset('storage/' . $f->foto_galeri)}}" alt="">
            </div>
            @php
                $count++;
            @endphp
            @endforeach
            @if ($count % 2 != 0)
                </div>
            @endif
        </div>
        {{ $foto->links('vendor.pagination.custom') }}
        <h2>GALERI VIDEO DESA SUKOLILO</h2>
        <div class="elements-container">
            @php
                $count = 0;
            @endphp
            @foreach ($video as $v)
                @if ($count % 3 == 0)
                    @if ($count > 0)
                        </div>
                    @endif
                    <div class="elements-box">
                @endif
                <iframe class="galeri-video" src="{{$v->youtubeid}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            @php
                $count++;
            @endphp
            @endforeach
            @if ($count % 3 != 0)
                </div>
            @endif
        </div>
        {{ $video->links('vendor.pagination.custom') }}
    </div>
</section>
@endsection
