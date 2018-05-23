<!doctype html>
<html lang="en">

@include('pemilik.parts.header')

<body>
    <div class="wrapper">
        @include('pemilik.parts.navbar')
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    Pemilik
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{ url('pemilik-dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pemilik-keuangan') }}">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Laporan Keuangan</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pemilik-penilaian') }}">
                            <i class="material-icons">event</i>
                            <p>Penilaian Instruktur</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Keuangan Bulan Ini</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Pelanggan</th>
                                                    <th>Tanggal</th>
                                                    <th>Jumlah Bayar</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>24-07-2017</td>
                                                        <td>800.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>24-07-2017</td>
                                                        <td>800.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>24-07-2017</td>
                                                        <td>800.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>24-07-2017</td>
                                                        <td>800.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-primary" style="font-weight: bold;">Total</td>
                                                        <td class="text-primary" style="font-weight: bold;"">3.200.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Evaluasi Instruktur</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Instruktur</th>
                                                    <th>Rating</th>
                                                    <th>Kritik dan Saran</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>5</td>
                                                        <td>Sudah bagus, tapi saya boleh ugal-ugalan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>4</td>
                                                        <td>Masnya ngerokok</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>5</td>
                                                        <td>Sudah bagus, tapi saya boleh ugal-ugalan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>4</td>
                                                        <td>Masnya ngerokok</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include('pemilik.parts.footer')

</html>