@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
        <h2>SUMBER DAYA ALAM DESA SUKOLILO</h2>
        
        <div class="section-content">
            <h4>PERTANIAN & PERKEBUNAN</h4>
            <div class="content-row">
                <img src="path/to/pertanian-image.jpg" alt="Gambar Pertanian" class="content-image">
                <table class="content-table">
                    <tr>
                        <th>Jenis Tanaman</th>
                        <th>Luas Lahan</th>
                        <th>Hasil</th>
                    </tr>
                    <tr>
                        <td>Jagung</td>
                        <td>16 Ha</td>
                        <td>960000 Kg/Ka</td>
                    </tr>
                    <tr>
                        <td>Kacang Tanah</td>
                        <td>1.5 Ha</td>
                        <td>120000 Kg/Ka</td>
                    </tr>
                    <tr>
                        <td>Padi</td>
                        <td>72 Ha</td>
                        <td>4900000 Kg/Ka</td>
                    </tr>
                    <tr>
                        <td>Cabai</td>
                        <td>10 Ha</td>
                        <td>340000 Kg/Ka</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="section-content">
            <h4>PETERNAKAN</h4>
            <div class="content-row">
                <img src="path/to/peternakan-image.jpg" alt="Gambar Peternakan" class="content-image">
                <table class="content-table">
                    <tr>
                        <th>Jenis Ternak</th>
                        <th>Jumlah Ternak</th>
                        <th>Jumlah Pemilik</th>
                    </tr>
                    <tr>
                        <td>Sapi</td>
                        <td>973 Ekor</td>
                        <td>480 Orang</td>
                    </tr>
                    <tr>
                        <td>Kambing</td>
                        <td>708 Ekor</td>
                        <td>352 Orang</td>
                    </tr>
                    <tr>
                        <td>Ayam</td>
                        <td>5.290 Ekor</td>
                        <td>324 Orang</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
