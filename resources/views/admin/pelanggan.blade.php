<!doctype html>
<html lang="en">

@include('admin.parts.header')

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{ url('admin-dashboard') }}">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin-jadwal') }}">
                            <i class="material-icons">event</i>
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('admin-pelanggan') }}">
                            <i class="material-icons">person</i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin-instruktur') }}">
                            <i class="material-icons">group</i>
                            <p>Instruktur</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin-mobil') }}">
                            <i class="material-icons">directions_car</i>
                            <p>Mobil</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            @include('admin.parts.navbar')
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
                                    <form action="{{ url('/pelanggan/register') }}" method = "post">
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
                                                        <input type="radio" name="jk_pelanggan" value="Laki-laki">
                                                        Laki-laki
                                                    </label>    
                                                    <label>
                                                        <input type="radio" name="jk_pelanggan" value="Perempuan">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Tambah Pelanggan</button>
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
                                            <!-- <th>No</th> -->
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <!-- <th>Paket</th> -->
                                            <th>Edit</th>
                                            <th>Delete</th>
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
                                                            <button data-target="#myModal{{$listpelanggan->username}}" type="button" data-toggle="modal" rel="tooltip" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                        </td>
    <div class="modal fade" id="myModal{{$listpelanggan->username}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModal">Edit Data Pelanggan</h4>
            </div>
            <div class="modal-body">                       
                <form action="{{ url('/admin/pelanggan/update/'.$listpelanggan->username) }}" method = "get">
                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label" >Username</label>
                                                    <input type="text" class="form-control" name="username" value="{{$listpelanggan->username}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password" value="{{$listpelanggan->password}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_pelanggan" value="{{$listpelanggan->nama_pelanggan}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor HP</label>
                                                    <input type="text" class="form-control" name="telp_pelanggan" value="{{$listpelanggan->telp_pelanggan}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat_pelanggan" value="{{$listpelanggan->alamat_pelanggan}}">
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
                                            </div><br><br><br><br>
                                            <label>&nbsp;&nbsp;&nbsp;Jenis Kelamin</label><br>
                                            <div class="dropdown col-md-3">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="jk_pelanggan" value="Laki-laki">
                                                        Laki-laki
                                                    </label>    
                                                    <label>
                                                        <input type="radio" name="jk_pelanggan" value="Perempuan">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                    <br>
                    <button type="submit" class="btn btn-primary pull-right">Update Pelanggan</button>
                    <div class="clearfix"></div>
                </form>    
            </div>
        </div>
    </div>
</div>
                                                        <td>
                                                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{$listpelanggan->username}}" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                        </td>
<div id="modal-delete{{$listpelanggan->username}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                    Anda yakin ingin menghapus data?<hr><br>
                        <form class="form-horizontal" role="form" method="get" action="{{ url('/admin/pelanggan/delete/'.$listpelanggan->username) }}"><button>Iya</button>
                        </form>
                        <button>Tidak</button>
                    </center>
                </div>
            </div>
        </div>
</div>
                                                    </tr>
                                                  @endforeach
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
</body>

@include('admin.parts.footer')

</html>