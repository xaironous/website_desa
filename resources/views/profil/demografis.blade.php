@extends('layouts.app')

@section('content')
<section id="profil-section">
    <div class="container">
        <h2>DEMOGRAFIS DESA SUKOLILO</h2>
        <div class="charts">
            <div class="chart">
                <canvas id="jumlah-penduduk-chart"></canvas>
                <script>
                    var xValues = ["{{$penduduk[0]->jenis}}", "{{$penduduk[1]->jenis}}"];
                    var yValues = [{{$penduduk[0]->jumlah}}, {{$penduduk[1]->jumlah}}];
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
                        <td>{{$penduduk[0]->jenis}}</td>
                        <td>{{$penduduk[0]->jumlah}}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{$penduduk[1]->jenis}}</td>
                        <td>{{$penduduk[1]->jumlah}}</td>
                    </tr>
                    <tr>
                        <td colspan='2'>Total</td>
                        @php
                         $total_penduduk = $penduduk[0]->jumlah + $penduduk[1]->jumlah;
                        @endphp
                        <td>{{$total_penduduk}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="charts">
            <div class="chart">
                <canvas id="pendidikan-penduduk-chart"></canvas>
                <script>
                    var xValues = [
                        "{{$pendidikan[0]->tingkat}}",
                        "{{$pendidikan[1]->tingkat}}",
                        "{{$pendidikan[2]->tingkat}}",
                        "{{$pendidikan[3]->tingkat}}",
                        "{{$pendidikan[4]->tingkat}}"
                    ];
                    var yValues = [
                        {{$pendidikan[0]->jumlah}},
                        {{$pendidikan[1]->jumlah}},
                        {{$pendidikan[2]->jumlah}},
                        {{$pendidikan[3]->jumlah}},
                        {{$pendidikan[4]->jumlah}}
                    ];
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
                    @php
                        $count = 1;
                    @endphp
                    <tr>
                        <th>No.</th>
                        <th>Tingkat Pendidikan</th>
                        <th>Jumlah(Jiwa)</th>
                    </tr>
                    @foreach ($pendidikan as $p)
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$p->tingkat}}</td>
                        <td>{{$p->jumlah}}</td>
                    </tr>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                    <tr>
                        <td colspan='2'>Total</td>
                        @php
                            $total_pendidikan = 0;
                            foreach ($pendidikan as $p) {
                                $total_pendidikan += $p->jumlah;
                            }
                        @endphp
                        <td>{{$total_pendidikan}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="charts">
            <div class="chart">
                <canvas id="mata-pencaharian-chart"></canvas>
                <script>
                    var xValues = [
                        "{{$pekerjaan[0]->pekerjaan}}",
                        "{{$pekerjaan[1]->pekerjaan}}",
                        "{{$pekerjaan[2]->pekerjaan}}",
                        "{{$pekerjaan[3]->pekerjaan}}",
                        "{{$pekerjaan[4]->pekerjaan}}",
                        "{{$pekerjaan[5]->pekerjaan}}"
                    ];
                    var yValues = [
                        {{$pekerjaan[0]->jumlah}},
                        {{$pekerjaan[1]->jumlah}},
                        {{$pekerjaan[2]->jumlah}},
                        {{$pekerjaan[3]->jumlah}},
                        {{$pekerjaan[4]->jumlah}},
                        {{$pekerjaan[5]->jumlah}}
                    ];
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
                        <td>{{$pekerjaan[0]->pekerjaan}}</td>
                        <td>{{$pekerjaan[0]->jumlah}}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{$pekerjaan[1]->pekerjaan}}</td>
                        <td>{{$pekerjaan[1]->jumlah}}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>{{$pekerjaan[2]->pekerjaan}}</td>
                        <td>{{$pekerjaan[2]->jumlah}}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>{{$pekerjaan[3]->pekerjaan}}</td>
                        <td>{{$pekerjaan[3]->jumlah}}</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>{{$pekerjaan[4]->pekerjaan}}</td>
                        <td>{{$pekerjaan[4]->jumlah}}</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>{{$pekerjaan[5]->pekerjaan}}</td>
                        <td>{{$pekerjaan[5]->jumlah}}</td>
                    </tr>
                    <tr>
                        <td colspan='2'>Total</td>
                        @php
                            $total_pekerjaan =
                            $pekerjaan[0]->jumlah +
                            $pekerjaan[1]->jumlah +
                            $pekerjaan[2]->jumlah +
                            $pekerjaan[3]->jumlah +
                            $pekerjaan[4]->jumlah +
                            $pekerjaan[5]->jumlah;
                        @endphp
                        <td>{{$total_pekerjaan}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="charts">
            <div class="chart">
                <canvas id="persebaran-chart"></canvas>
                <script>
                    var tahun = <?php echo json_encode($natalitas); ?>;
                    const xValues2 = tahun.map(item => item.tahun)
                    const kelahiran = tahun.map(item => item.kelahiran)
                    const kematian = tahun.map(item => item.kematian)
                    new Chart("persebaran-chart", {
                    type: "line",
                    data: {
                        labels: xValues2,
                        datasets: [{
                        label: 'Tingkat Kelahiran',
                        data: kelahiran,
                        borderColor: "#059212",
                        fill: false
                        },{
                        label: 'Tingkat Kematian',
                        data: kematian,
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
                        @foreach ($natalitas as $n)
                            <th>{{$n->tahun}}</th>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Angka Kelahiran</td>
                        @foreach ($natalitas as $n)
                            <td>{{$n->kelahiran}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Angka Kematian</td>
                        @foreach ($natalitas as $n)
                            <td>{{$n->kematian}}</td>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
