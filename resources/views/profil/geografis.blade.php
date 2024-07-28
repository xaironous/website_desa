@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
    <h2>LOKASI DESA SUKOLILO</h2>
        <div class="profil-container">
            <div class="map-container">
                <div class="map-iframe-box">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15799.354321415702!2d112.70339531206216!3d-8.117912627811199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6217fb80c68af%3A0x1adc7c81c6736f3a!2sSukolilo%2C%20Wajak%2C%20Malang%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1721188508380!5m2!1sen!2sid"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="map-iframe">
                    </iframe>
                </div>
                <div class="map-text-box">
                    <p class="small-label">Secara geografis desa Sukolilo termasuk wilayah dataran sedang yang memungkinkannya untuk memiliki lahan persawahan dan perkebunan. Letak desa Sukolilo sendiri berada diantara tiga desa lain yang masih termasuk dalam wilayah kecamatan Wajak dan satu desa lainnya termasuk dalam wilayah kecamatan Turen. Luas wilayah desa Sukolilo keseluruhan adalah : 627,407 Ha. Dimana seluas 38,455 Ha adalah pemukiman penduduk sedangkan luas Lahan Pertanian 107,001 Ha, Luas Lahan Perkebunan 328,870 Ha.</p>
                    <ul>
                        <li class="small-label">Disebelah Utara desa Sukolilo berbatasan dengan Desa Sukoanyar dan Desa Wajak</li>
                        <li class="small-label">Disebelah Timur berbatasan dengan Desa Blayu</li>
                        <li class="small-label">Disebelah Selatan berbatasan dengan Desa Tumpuk Renteng Kecamatan Turen dan Desa Codo Kecamatan Wajak</li>
                        <li class="small-label">Disebelah Barat berbatasan dengan Desa Kidangbang</li>
                    </ul>
                    <p class="small-label">Jarak tempuh Desa Sukolilo ke ibu kota kecamatan adalah ± 4 km, yang dapat ditempuh dengan waktu sekitar ± 15 menit, sedangkan jarak tempuh ke Ibu kota kabupaten adalah ± 23 km, yang dapat ditempuh dengan waktu sekitar ± 60 menit.</p>
                </div>
            </div>
        </div>
        <p class="medium-label"><br><br>Lebih jelasnya mengenai <strong>komposisi penggunaan lahan di desa Sukolilo</strong> dapat dilihat dari grafik berikut :</p>

        <div class="charts">
            <div class="chart">
                <canvas id="lahan-chart"></canvas>
                <script>
                    var db_array = <?php echo json_encode($lahan); ?>;
                    var xValues = db_array.map(item => item.nama);
                    var yValues = db_array.map(item => item.jumlah);
                    var barColors = [
                    "#059212",
                    "#06D001",
                    "#9BEC00"
                    ];

                    new Chart("lahan-chart", {
                    type: "pie",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            title: {
                                display: true,
                                text:"Penggunaan Lahan Desa Sukolilo",
                            },
                            legend: {
                                position: 'right',
                            }
                        }
                    }
                    });
                </script>
            </div>
            <div class="chart">
                <table class="content-table">
                    @php
                        $count = 1;
                    @endphp
                    <tr>
                        <th>No.</th>
                        <th>Jenis Lahan</th>
                        <th>Jumlah</th>
                    </tr>
                    @foreach ($lahan as $l)
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$l->nama}}</td>
                        <td>{{$l->jumlah}}</td>
                    </tr>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                    <tr>
                        <td colspan='2'>Total</td>
                        @php
                            $total_lahan = 0;
                            foreach ($lahan as $l) {
                                $total_lahan += $l->jumlah;
                            }
                        @endphp
                        <td>{{$total_lahan}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="charts">
            <div class="chart">
                <canvas id="fasil-pendidikan-chart"></canvas>
                <script>
                    var db_array = <?php echo json_encode($fasil_pendidikan); ?>;
                    var xValues = db_array.map(item => item.nama);
                    var yValues = db_array.map(item => item.jumlah);
                    var barColors = [
                    "#059212",
                    "#06D001",
                    "#9BEC00",
                    "#F3FF90",
                    "#399918",
                    "#97BE5A",
                    "#C3FF93",
                    "#FFDB5C"
                    ];

                    new Chart("fasil-pendidikan-chart", {
                    type: "pie",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            title: {
                                display: true,
                                text:"Fasilitas Pendidikan Desa Sukolilo",
                            },
                            legend: {
                                position: 'right',
                            }
                        }
                    }
                    });
                </script>
            </div>
            <div class="chart">
                <table class="content-table">
                    @php
                        $count = 1;
                    @endphp
                    <tr>
                        <th>No.</th>
                        <th>Jenis Fasilitas</th>
                        <th>Jumlah</th>
                    </tr>
                    @foreach ($fasil_pendidikan as $f)
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$f->nama}}</td>
                        <td>{{$f->jumlah}}</td>
                    </tr>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                    <tr>
                        <td colspan='2'>Total</td>
                        @php
                            $total_fasil_pendidikan = 0;
                            foreach ($fasil_pendidikan as $f) {
                                $total_fasil_pendidikan += $f->jumlah;
                            }
                        @endphp
                        <td>{{$total_fasil_pendidikan}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="charts">
            <div class="chart">
                <canvas id="fasil-kesehatan-chart"></canvas>
                <script>
                    var db_array = <?php echo json_encode($fasil_kesehatan); ?>;
                    var xValues = db_array.map(item => item.nama);
                    var yValues = db_array.map(item => item.jumlah);
                    var barColors = [
                    "#059212",
                    "#06D001",
                    "#9BEC00",
                    "#F3FF90",
                    "#399918"
                    ];

                    new Chart("fasil-kesehatan-chart", {
                    type: "pie",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            title: {
                                display: true,
                                text:"Fasilitas Pendidikan Desa Sukolilo",
                            },
                            legend: {
                                position: 'right',
                            }
                        }
                    }
                    });
                </script>
            </div>
            <div class="chart">
                <table class="content-table">
                    @php
                        $count = 1;
                    @endphp
                    <tr>
                        <th>No.</th>
                        <th>Jenis Fasilitas</th>
                        <th>Jumlah</th>
                    </tr>
                    @foreach ($fasil_kesehatan as $f)
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$f->nama}}</td>
                        <td>{{$f->jumlah}}</td>
                    </tr>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                    <tr>
                        <td colspan='2'>Total</td>
                        @php
                            $total_fasil_kesehatan = 0;
                            foreach ($fasil_kesehatan as $f) {
                                $total_fasil_kesehatan += $f->jumlah;
                            }
                        @endphp
                        <td>{{$total_fasil_kesehatan}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="profil-section">
    <div class="container">
        <h2>TOPOGRAFI DESA SUKOLILO</h2>
        <img src="images/topografi/topografi_desa.jpg" alt="" class="struktur-img">
    </div>
</section>
@endsection
