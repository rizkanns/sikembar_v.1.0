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
                    <li>
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
                    <li class="active">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Pelanggan</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Username</th>
                                            <!-- <th>Email</th> -->
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Paket</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>pelkenuk</td>
                                                <!-- <td>pelkenuk@gmail.com</td> -->
                                                <td>Rizka Annisa</td>
                                                <td>081515580307</td>
                                                <td>PMI II no.3 Surabaya</td>
                                                <td>P</td>
                                                <td>New Avanza</td>
                                            <tr>
                                                <td>2</td>
                                                <td>salina</td>
                                                <!-- <td>salina@gmail.com</td> -->
                                                <td>Dwi Irsalina</td>
                                                <td>081515580307</td>
                                                <td>Keputih II no.3 Surabaya</td>
                                                <td>P</td>
                                                <td>New Avanza</td>                        
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>popsky</td>
                                                <!-- <td>popsky@gmail.com</td> -->
                                                <td>Shafira Aisyah</td>
                                                <td>081515580307</td>
                                                <td>Dinoyo Sekolahan no.3 Surabaya</td>
                                                <td>P</td>
                                                <td>New Avanza</td>                                                
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>salina</td>
                                                <!-- <td>salina@gmail.com</td> -->
                                                <td>Dwi Irsalina</td>
                                                <td>081515580307</td>
                                                <td>Keputih II no.3 Surabaya</td>
                                                <td>P</td>
                                                <td>New Avanza</td>                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
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