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
                    <li>
                        <a href="{{ url('admin-pelanggan') }}">
                            <i class="material-icons">person</i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                    <li class="active">
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
                                    <h4 class="title">Instruktur</h4>
                                    <p class="category">Tambah data pelanggan</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{ url('/admin/instruktur/insert') }}" method = "post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor Induk</label>
                                                    <input type="text" class="form-control" name="no_induk">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password_instruktur">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_instruktur">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor HP</label>
                                                    <input type="text" class="form-control" name="telp_instruktur">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat_instruktur">
                                                </div>
                                            </div>
                                        </div><br><br>
                                        <label>Jenis Kelamin</label>
                                        <div class="row">
                                            <div class="dropdown col-md-4">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="jk_instruktur" value="Laki-laki">
                                                        Laki-laki
                                                    </label>    
                                                    <label>
                                                        <input type="radio" name="jk_instruktur" value="Perempuan">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Instruktur</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Instruktur</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <!-- <th>No</th> -->
                                            <th>No Induk</th>
                                            <th>Password</th>
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            @foreach($instruktur as $listinstruktur)
                                                    <tr>
                                                        <!-- <td></td> -->
                                                        <td>{{$listinstruktur->no_induk}}</td>
                                                        <td>{{$listinstruktur->password_instruktur}}</td>
                                                        <td>{{$listinstruktur->nama_instruktur}}</td>
                                                        <td>{{$listinstruktur->telp_instruktur}}</td>
                                                        <td>{{$listinstruktur->alamat_instruktur}}</td>
                                                        <td>{{$listinstruktur->jk_instruktur}}</td>
                                                        <!-- <td></td> -->
                                                        <td>
                                                            <button data-target="#myModal{{$listinstruktur->no_induk}}" type="button" data-toggle="modal" rel="tooltip" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                        </td>
<div class="modal fade" id="myModal{{$listinstruktur->no_induk}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModal">Edit Data Pelanggan</h4>
            </div>
            <div class="modal-body">                       
                <form action="{{ url('/admin/instruktur/update/'.$listinstruktur->no_induk) }}" method = "get">
                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor Induk</label>
                                                    <input type="text" class="form-control" name="no_induk" value="{{$listinstruktur->no_induk}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password_instruktur" value="{{$listinstruktur->password_instruktur}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_instruktur" value="{{$listinstruktur->nama_instruktur}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor HP</label>
                                                    <input type="text" class="form-control" name="telp_instruktur" value="{{$listinstruktur->telp_instruktur}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat_instruktur" value="{{$listinstruktur->alamat_instruktur}}">
                                                </div>
                                            </div>
                                        </div><br><br>
                                        <label>Jenis Kelamin</label>
                                        <div class="row">
                                            <div class="dropdown col-md-4">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="jk_instruktur" value="Laki-laki">
                                                        Laki-laki
                                                    </label>    
                                                    <label>
                                                        <input type="radio" name="jk_instruktur" value="Perempuan">
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
                                                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{$listinstruktur->no_induk}}" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                        </td>
<div id="modal-delete{{$listinstruktur->no_induk}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                    Anda yakin ingin menghapus data?<hr><br>
                        <form class="form-horizontal" role="form" method="get" action="{{ url('/admin/instruktur/delete/'.$listinstruktur->no_induk) }}"><button>Iya</button>
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
                                    <!-- <button type="submit" class="btn btn-primary pull-right">Update Instruktur</button> -->
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