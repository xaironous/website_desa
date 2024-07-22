@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
        <h2>DEMOGRAFIS DESA SUKOLILO</h2>
        <div class="charts">
            <div class="chart">
                <canvas id="jumlah-penduduk-chart"></canvas>
                <script>
                    var xValues = ["Laki-Laki", "Perempuan"];
                    var yValues = ["3533", "3556"];
                    var barColors = [
                    "#059212",
                    "#06D001",
                    ];

                    new Chart("jumlah-penduduk-chart", {
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
                                text:"Penduduk Desa Sukolilo",
                            },
                            legend: {
                                position: 'bottom',
                            }
                        }
                    }
                    });
                </script>
            </div>
            <div class="chart">
                <table class="content-table">
                    <tr>
                        <th>No.</th>
                        <th>Jenis Kelamin</th>
                        <th>Jumlah(Jiwa)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Laki-laki</td>
                        <td>3,533</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Perempuan</td>
                        <td>3,556</td>
                    </tr>
                    <tr>
                        <td colspan='2'>Total</td>
                        <td>7,089</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="charts">
            <div class="chart">
                <canvas id="pendidikan-penduduk-chart"></canvas>
                <script>
                    var xValues = ["Buta Huruf", "SD", "SLTP/SMP", "SLTA/SMA", "Perguruan Tinggi"];
                    var yValues = [236, 584, 713, 365, 70];
                    var barColors = [
                    "#059212",
                    "#06D001",
                    "#9BEC00",
                    "#F3FF90",
                    "#399918",
                    ];

                    new Chart("pendidikan-penduduk-chart", {
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
                                text:"Tingkat Pendidikan Penduduk Desa Sukolilo",
                            },
                        legend: {
                            position: 'bottom',
                        }
                        }
                    }
                    });
                </script>
            </div>
            <div class="chart">
                <table class="content-table">
                    <tr>
                        <th>No.</th>
                        <th>Tingkat Pendidikan</th>
                        <th>Jumlah(Jiwa)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Buta Huruf</td>
                        <td>236</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SD</td>
                        <td>584</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>SLTP/SMP</td>
                        <td>713</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>SLTA/SMA</td>
                        <td>365</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Perguruan Tinggi</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td colspan='2'>Total</td>
                        <td>1,973</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="charts">
            <div class="chart">
                <canvas id="mata-pencaharian-chart"></canvas>
                <script>
                    var xValues = ["Petani", "Buruh Tani", "PNS", "Pegawai Swasta", "Wirausahawan", "Tidak Bekerja"];
                    var yValues = [1504, 1461, 89, 325, 2323, 1264];
                    var barColors = [
                    "#059212",
                    "#06D001",
                    "#9BEC00",
                    "#F3FF90",
                    "#399918",
                    "#97BE5A"
                    ];

                    new Chart("mata-pencaharian-chart", {
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
                                text:"Mata Pencaharian Penduduk Desa Sukolilo",
                            },
                        legend: {
                            position: 'bottom',
                        }
                        }
                    }
                    });
                </script>
            </div>
            <div class="chart">
                <table class="content-table">
                    <tr>
                        <th>No.</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Jumlah(jiwa)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Petani</td>
                        <td>1,504</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Buruh Tani</td>
                        <td>1,461</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PNS</td>
                        <td>89</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pegawai Swasta</td>
                        <td>325</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Wirausahawan</td>
                        <td>2,323</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Tidak Bekerja</td>
                        <td>1,264</td>
                    </tr>
                    <tr>
                        <td colspan='2'>Total</td>
                        <td>7,056</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="charts">
            <div class="chart">
                <canvas id="persebaran-chart"></canvas>
                <script>
                    const xValues2 = [2019, 2020, 2021, 2022, 2023, 2024];

                    new Chart("persebaran-chart", {
                    type: "line",
                    data: {
                        labels: xValues2,
                        datasets: [{
                        label: 'Tingkat Kelahiran',
                        data: [88, 111, 103, 96, 94, 33],
                        borderColor: "#059212",
                        fill: false
                        },{
                        label: 'Tingkat Kematian',
                        data: [86, 113, 105, 71, 62, 53],
                        borderColor: "#06D001",
                        fill: false
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            title: {
                                display: true,
                                text:"Angka Kelahiran dan Kematian Desa Sukolilo",
                            }
                        },
                    }
                    });
                </script>
            </div>
            <div class="chart">
                <table class="content-table">
                    <tr>
                        <th></th>
                        <th>2019</th>
                        <th>2020</th>
                        <th>2021</th>
                        <th>2022</th>
                        <th>2023</th>
                        <th>2024</th>
                    </tr>
                    <tr>
                        <td>Angka Kelahiran</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Angka Kematian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
