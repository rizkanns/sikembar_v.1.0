<!doctype html>
<html lang="en">

@include('instruktur.parts.header')

<body>
    <div class="wrapper">
        @include('instruktur.parts.navbar')
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    instruktur
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{ url('instruktur-dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('instruktur-evaluasi') }}">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Hasil Evaluasi</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('instruktur-jadwal') }}">
                            <i class="material-icons">event</i>
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('instruktur-pelanggan') }}">
                            <i class="material-icons">person</i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Banyak job</h4>
                                    <p class="category">Banyak shift job yang diambil</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Pendapatan</h4>
                                    <p class="category">Pendapatan instruktur selama sebtahun</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="red">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Jam kerja</h4>
                                    <p class="category">Kinerja instruktur selama kursus</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Pelanggan</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Rizka Annisa</td>
                                                <td>081515580307</td>
                                                <td>PMI II no.3 Surabaya</td>
                                            <tr>
                                                <td>2</td>
                                                <td>Dwi Irsalina</td>
                                                <td>081515580307</td>
                                                <td>Keputih II no.3 Surabaya</td>                     
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Shafira Aisyah</td>
                                                <td>081515580307</td>
                                                <td>Dinoyo Sekolahan no.3 Surabaya</td>                                           
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Dwi Irsalina</td>
                                                <td>081515580307</td>
                                                <td>Keputih II no.3 Surabaya</td>                                       
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
                                    <h4 class="title">Jadwal Hari ini</h4>
                                    <p class="category">Sabtu, 4 November 2017</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>No</th>
                                            <th>Pelanggan</th>
                                            <th>Instruktur</th>
                                            <th>Jam</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Rizka Annisa</td>
                                                <td>Sunaryo</td>
                                                <td>09.00-11.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Shafira A Rahmadhani</td>
                                                <td>Yasin</td>
                                                <td>12.00-14.00</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Dwi Irsalina</td>
                                                <td>Djohan Prabowo</td>
                                                <td>11.00-13.00</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Rina Wijaya</td>
                                                <td>Rafiar</td>
                                                <td>15.00-17.00</td>
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

@include('instruktur.parts.footer')

</html>