@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
        <h2>GALERI FOTO DESA SUKOLILO</h2>
        <div id="elements-container">
            @php
                $count = 0;
            @endphp
            @foreach ($foto as $f)
                @if ($count % 3 == 0)
                    @if ($count > 0)
                        </div>
                    @endif
                    <div class="elements-box">
                @endif
            <div class="galeri-foto-card">
                <img src="{{$f->foto_galeri}}" alt="">
            </div>
            @php
                $count++;
            @endphp
            @endforeach
            @if ($count % 3 != 0)
                </div>
            @endif
        </div>
        <pagination class="pagination">{{ $foto->links() }}</pagination>
        <h2>GALERI VIDEO DESA SUKOLILO</h2>
        <div id="elements-container">
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
                <iframe width="1080" height="600" src="{{$v->youtubeid}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            @php
                $count++;
            @endphp
            @endforeach
            @if ($count % 3 != 0)
                </div>
            @endif
        </div>
        <pagination class="pagination">{{ $video->links() }}</pagination>
    </div>
</section>
@endsection
