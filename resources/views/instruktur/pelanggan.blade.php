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
                                            {{-- <th>No</th> --}}
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Paket</th>
                                        </thead>
                                        <tbody>
                                            @foreach($pelanggan as $listpelanggan)
                                                    <tr>
                                                        <!-- <td></td> -->
                                                        <td>{{$listpelanggan->username}}</td>
                                                        <td>{{$listpelanggan->password}}</td>
                                                        <td>{{$listpelanggan->nama_pelanggan}}</td>
                                                        <td>{{$listpelanggan->telp_pelanggan}}</td>
                                                        <td>{{$listpelanggan->alamat_pelanggan}}</td>
                                                        <td>{{$listpelanggan->jk_pelanggan}}</td>
                                                        <!-- <td></td> -->
                                                        <td>
                                                    </tr>
                                            @endforeach
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