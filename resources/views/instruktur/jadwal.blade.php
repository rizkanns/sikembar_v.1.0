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
                    <li class="active">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Jadwal Kursus</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    {{-- <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-primary pull-right">Tambah Jadwal</button> --}}
                                    <div class="clearfix"></div>
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Instruktur</th>
                                            <th>Tanggal</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Berakhir</th>
                                        </thead>
                                        <tbody>
                                            @foreach($jadwal as $listjadwal)
                                            <tr>
                                                
                                                <td>{{$listjadwal->id_jadwal}}</td>
                                                <td>{{$listjadwal->username}}</td>
                                                <td>{{$listjadwal->no_induk}}</td>
                                                <td>{{$listjadwal->tanggal_kursus}}</td>
                                                <td>{{$listjadwal->jam_mulai}}</td>
                                                <td>{{$listjadwal->jam_selesai}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="clearfix"></div>
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