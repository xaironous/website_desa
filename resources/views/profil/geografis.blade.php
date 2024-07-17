@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
    <h2>LOKASI DESA SUKOLILO</h2>
        <div class="profil-container">
            <div class="map">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15799.354321415702!2d112.70339531206216!3d-8.117912627811199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6217fb80c68af%3A0x1adc7c81c6736f3a!2sSukolilo%2C%20Wajak%2C%20Malang%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1721188508380!5m2!1sen!2sid" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="map-text">
                <p>Secara geografis desa Sukolilo termasuk wilayah dataran sedang yang memungkinkannya untuk memiliki lahan persawahan dan perkebunan. Letak desa Sukolilo sendiri berada diantara tiga desa lain yang masih termasuk dalam wilayah kecamatan Wajak dan satu desa lainnya termasuk dalam wilayah kecamatan Turen. Luas wilayah desa Sukolilo keseluruhan adalah : 627,407 Ha. Dimana seluas 38,455 Ha adalah pemukiman penduduk sedangkan luas Lahan Pertanian 107,001 Ha, Luas Lahan Perkebunan 328,870 Ha.</p>            
                <ul>
                    <li>Disebelah Utara desa Sukolilo berbatasan dengan Desa Sukoanyar dan Desa Wajak</li>
                    <li>Disebelah Timur berbatasan dengan Desa Blayu</li>
                    <li>Disebelah Selatan berbatasan dengan Desa Tumpuk Renteng Kecamatan Turen dan Desa Codo Kecamatan Wajak</li>
                    <li>Disebelah Barat berbatasan dengan Desa Kidangbang</li>
                </ul>
                <p>Jarak tempuh Desa Sukolilo ke ibu kota kecamatan adalah ± 4 km, yang dapat ditempuh dengan waktu sekitar ± 15 menit, sedangkan jarak tempuh ke Ibu kota kabupaten adalah ± 23 km, yang dapat ditempuh dengan waktu sekitar ± 60 menit.</p>
            </div>
        </div>
        <p><br><br>Lebih jelasnya mengenai <strong>komposisi penggunaan lahan di desa Sukolilo</strong> dapat dilihat dari grafik berikut :</p>

        <div class="charts">
            <div class="chart">
                <canvas id="lahan-chart"></canvas>
                <script>
                    var xValues = ["Pemukiman Penduduk", "Perkebunan", "Persawahan"];
                    var yValues = [118, 236, 106];
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
                <canvas id="fasil-pendidikan-chart"></canvas>
                <script>
                    var xValues = ["PAUD", "KB", "RA", "TK", "SD/MI", "SMP", "SMA", "Pondok Pesantren"];
                    var yValues = [0, 1, 5, 1, 6, 1, 1, 1];
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
        </div>
        <div class="chart3">
            <canvas id="fasil-kesehatan-chart"></canvas>
            <script>
                var xValues = ["Posyandu", "Polindes", "Smart Health", "Bidan Desa", "Perawat"];
                var yValues = [10, 1, 6, 1, 1];
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
                            text:"Fasilitas Kesehatan Desa Sukolilo",
                        },
                        legend: {
                            position: 'right',
                        }
                    }
                }
                });
            </script>
        </div>
    </div>
</section>

<section id="profil-section">
    <div class="container">
        <h2>TOPOGRAFI DESA SUKOLILO</h2>
        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies et felis sit amet lobortis. Ut suscipit a risus at egestas. Sed sagittis enim gravida, auctor est eu, fermentum tellus. Sed sit amet scelerisque ex. Duis consectetur dictum quam. Aenean feugiat leo nec odio sollicitudin rhoncus. Aenean pellentesque sit amet ligula et varius. Aenean lacinia ligula dolor, et convallis ante lobortis vel. Suspendisse eleifend justo elit, vel euismod lectus mattis et. Nullam eleifend leo et faucibus venenatis. Nullam congue pretium consequat. Pellentesque placerat risus mattis aliquet eleifend. Aliquam ornare porttitor neque. Vestibulum nec urna dui. In sodales placerat purus, id consequat neque consectetur vitae.</P>
    </div>
</section>
@endsection