@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
        <h2>SUMBER DAYA ALAM DESA SUKOLILO</h2>

        <div class="section-content">
            <h4>PERTANIAN & PERKEBUNAN</h4>
            <div class="content-row">
                <img src="images/produk/hero_2.JPG" alt="Gambar Pertanian" class="content-image">
                <table class="content-table">
                    <tr>
                        <th>Jenis Tanaman</th>
                        <th>Luas Lahan</th>
                        <th>Jumlah Pemilik</th>
                    </tr>
                    @foreach ($pertanian as $p)
                    <tr>
                        <td>{{$p->jenis}}</td>
                        <td>{{$p->luas_lahan}} Ha</td>
                        <td>{{$p->hasil}} Kg/Ka</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="section-content">
            <h4>PETERNAKAN</h4>
            <div class="content-row">
                <img src="images/produk/peternakan.png" alt="Gambar Peternakan" class="content-image">
                <table class="content-table">
                    <tr>
                        <th>Jenis Ternak</th>
                        <th>Jumlah Ternak</th>
                        <th>Jumlah Pemilik</th>
                    </tr>
                    @foreach ($peternakan as $p)
                    <tr>
                        <td>{{$p->jenis}}</td>
                        <td>{{$p->jumlah_ternak}} Ekor</td>
                        <td>{{$p->pemilik}} Orang</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
