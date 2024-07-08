@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
        <h2>DATA PENDUDUK DESA SUKOLILO</h2>
        <table>
            <caption>Informasi Jumlah Penduduk</caption>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Kelamin</th>
                    <th>Jumlah</th>
                <tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Laki-laki</td>
                    <td>3.500 Jiwa</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Perempuan</td>
                    <td>3.556 Jiwa</td>
                </tr>
                <tr>
                    <th colspan="2">Jumlah Total</th>
                    <th>7.059</th>
                </tr>
            </tbody>
        </table>
        <table>
            <caption>Data Penduduk Berdasarkan Tingkat Pendidikan</caption>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tingkat Pendidikan</th>
                    <th>Jumlah</th>
                <tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Buta Huruf</td>
                    <td>236 Jiwa</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>SD</td>
                    <td>584 Jiwa</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>SLTP/SMP</td>
                    <td>713 Jiwa</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>SLTA/SMA</td>
                    <td>365 Jiwa</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Perguruan Tinggi</td>
                    <td>70 Jiwa</td>
                </tr>
                <tr>
                    <th colspan="2">Jumlah Total</th>
                    <th>1.973</th>
                </tr>
            </tbody>
        </table>
        <table>
            <caption>Data Penduduk Berdasarkan Mata Pencaharian</caption>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Mata Pencaharian</th>
                    <th>Jumlah</th>
                <tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Petani</td>
                    <td>1.504 Jiwa</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Buruh Tani</td>
                    <td>1.461 Jiwa</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>PNS</td>
                    <td>89 Jiwa</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Pegawai Swasta</td>
                    <td>325 Jiwa</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Wirausahawan</td>
                    <td>2.323 Jiwa</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Tidak Bekerja</td>
                    <td>1.264 Jiwa</td>
                </tr>
                <tr>
                    <th colspan="2">Jumlah Total</th>
                    <th>7.056</th>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection