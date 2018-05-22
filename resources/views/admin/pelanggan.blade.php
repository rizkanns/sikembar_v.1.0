<!doctype html>
<html lang="en">

@include('admin.parts.header')

<body>
    <div class="wrapper">
        @include('admin.parts.navbar')
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./pembayaran.php">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Pembayaran</p>
                        </a>
                    </li>
                    <li>
                        <a href="./jadwal.php">
                            <i class="material-icons">event</i>
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./pelanggan.php">
                            <i class="material-icons">person</i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                    <li>
                        <a href="./instruktur.php">
                            <i class="material-icons">group</i>
                            <p>Instruktur</p>
                        </a>
                    </li>
                    <li>
                        <a href="./mobil.php">
                            <i class="material-icons">directions_car</i>
                            <p>Mobil</p>
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
                                    <h4 class="title">Pelanggan</h4>
                                    <p class="category">Tambah data pelanggan</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{ url('/admin/pelanggan/insert') }}" method = "post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label" >Username</label>
                                                    <input type="text" class="form-control" name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="text" class="form-control" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_pelanggan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor HP</label>
                                                    <input type="text" class="form-control" name="telp_pelanggan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat_pelanggan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="dropdown col-md-3">
                                                <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Paket Kursus</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">New Avanza AT</a></li>
                                                    <li><a href="#">Toyota Agya AT</a></li>
                                                    <li><a href="#">Honda Mobilio AT</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">New Avanza MT</a></li>
                                                    <li><a href="#">Toyota Agya MT</a></li>
                                                    <li><a href="#">Honda Mobilio MT</a></li>
                                                </ul>
                                            </div><br><br>
                                            <label>&nbsp;&nbsp;&nbsp;Jenis Kelamin</label><br>
                                            <div class="dropdown col-md-3">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios">
                                                        Laki-laki
                                                    </label>    
                                                    <label>
                                                        <input type="radio" name="optionsRadios">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Pelanggan</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                                            <th>Password</th>
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Paket</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>pelkenuk</td>
                                                <td>pelkenuk@gmail.com</td>
                                                <td>Rizka Annisa</td>
                                                <td>081515580307</td>
                                                <td>PMI II no.3 Surabaya</td>
                                                <td>P</td>
                                                <td>New Avanza</td>
                                                <td>
                                                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>salina</td>
                                                <td>salina@gmail.com</td>
                                                <td>Dwi Irsalina</td>
                                                <td>081515580307</td>
                                                <td>Keputih II no.3 Surabaya</td>
                                                <td>P</td>
                                                <td>New Avanza</td>
                                                <td>
                                                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>popsky</td>
                                                <td>popsky@gmail.com</td>
                                                <td>Shafira Aisyah</td>
                                                <td>081515580307</td>
                                                <td>Dinoyo Sekolahan no.3 Surabaya</td>
                                                <td>P</td>
                                                <td>New Avanza</td>
                                                <td>
                                                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>salina</td>
                                                <td>salina@gmail.com</td>
                                                <td>Dwi Irsalina</td>
                                                <td>081515580307</td>
                                                <td>Keputih II no.3 Surabaya</td>
                                                <td>P</td>
                                                <td>New Avanza</td>
                                                <td>
                                                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <!-- <button type="submit" class="btn btn-primary pull-right">Update Pelanggan</button> -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="modal-delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                    Anda yakin ingin menghapus data?<hr><br>
                        <button>Iya</button>
                        <button>Tidak</button>
                    </center>
                </div>
            </div>
        </div>
</div>
</body>

@include('admin.parts.footer')

</html>