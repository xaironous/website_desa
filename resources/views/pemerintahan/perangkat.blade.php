@extends('layouts.app')

@section('content')
    <section id="profil-section">
        <div class="container">
            <h2>PERANGKAT DESA SUKOLILO</h2>
            <div class="struktur-container">
                @php
                    $count = 0;
                @endphp
                @foreach ($perangkat as $p)
                    @if ($count % 3 == 0)
                        @if ($count > 0)
                            </div> <!-- Close the previous struktur-box div -->
                        @endif
                        <div class="struktur-box"> <!-- Open a new struktur-box div -->
                    @endif
                    <div class="struktur-card" tabindex="0">
                    <div class="struktur-card-img-box">
                        <img src="{{ $p->foto_profil }}" alt="" class="struktur-card-img">
                    </div>
                        <div class="struktur-card-text-box">
                            <text class="medium-label" id="nama-perangkat">{{ $p->nama }}</text>
                            <text class="small-label" id="jabatan-perangkat">{{ $p->jabatan }}</text>
                        </div>
                    </div>
                    @php
                        $count++;
                    @endphp
                @endforeach
                @if ($count % 3 != 0)
                    </div> <!-- Close the last struktur-box div if not already closed -->
                @endif
        </div>
        </div>
    </section>
@endsection
