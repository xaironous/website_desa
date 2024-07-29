@extends('layouts.app')

@section('content')
    <section id="profil-section">
        <div class="container">
            <h2>{{$berita->judul}}</h2>
            <h5 class="center-text">Oleh: {{$berita->penulis}}</h5>
            <div class="info-box">
                <img src="{{asset($berita->foto_berita)}}" alt="" class="info-img">
            </div>
            <p>{{$berita->isi_berita}}</p>
        </div>
    </section>
@endsection
