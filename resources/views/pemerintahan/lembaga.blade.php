@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
        <h2>LEMBAGA DESA SUKOLILO</h2>
        <div class="space_40px"></div>
        @php
            $count = 0;
        @endphp
        <table class="bw-table">
            <tr>
                <th class="medium-label">Nama Lembaga</th>
                <th class="medium-label">Alamat</th>
            </tr>
            @foreach ($lembaga as $l)
                @if ($count % 2 == 0)
                    <tr class="black">
                @else
                    <tr class="white">
                @endif
                <td>
                    <text class="small-label lembaga-name">{{$l->nama}}</p>
                    <text class="small-label lembaga-desc">{{$l->singkatan}}</p>
                </td>
                <td class="small-label">{{$l->alamat}}</td>
            </tr>
            @php
                $count++;
            @endphp
            @endforeach
        </table>
    </div>
</section>
@endsection
