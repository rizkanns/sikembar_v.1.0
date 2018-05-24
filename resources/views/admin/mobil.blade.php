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
                    <li>
                        <a href="{{ url('admin-instruktur') }}">
                            <i class="material-icons">group</i>
                            <p>Instruktur</p>
                        </a>
                    </li>
                    <li class="active">
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Mobil</h4>
                                    <p class="category">Tambah data mobil</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{ url('/admin/mobil/insert') }}" method = "post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor Plat</label>
                                                    <input type="text" class="form-control" name="no_pol">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Merk Mobil</label>
                                                    <input type="text" class="form-control" name="merk_mobil">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tahun Keluaran</label>
                                                    <input type="text" class="form-control" name="tahun_mesin">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Warna Mobil</label>
                                                    <input type="text" class="form-control" name="warna_mobil">
                                                </div>
                                            </div>
                                        </div><br>
                                        <label>Jenis Mobil</label>
                                        <div class="row">
                                            <div class="dropdown col-md-3">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="jenis_mesin" value="AT">
                                                        AT
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="jenis_mesin" value="MT">
                                                        MT
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Tambah Mobil</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                    <div class="card-header" data-background-color="orange">
                                        <h4 class="title">Mobil Digunakan</h4>
                                        <p class="category">Sabtu, 4 November 2017</p>
                                    </div>
                                    <div class="card-content table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-warning">
                                                <th>No</th>
                                                <th>Instruktur</th>
                                                <th>Nopol</th>
                                                <th>Mobil</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Rizka Annisa</td>
                                                    <td>L 1234 PO</td>
                                                    <td>Avanza</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Shafira A Rahmadhani</td>
                                                    <td>L 1298 UI</td>
                                                    <td>Mobilio</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Dwi Irsalina</td>
                                                    <td>L 1273 R</td>
                                                    <td>Xenia</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Rina Wijaya</td>
                                                    <td>L 7263 TY</td>
                                                    <td>Agya</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Rizka Annisa</td>
                                                    <td>L 1234 PO</td>
                                                    <td>Avanza</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Shafira A Rahmadhani</td>
                                                    <td>L 1298 UI</td>
                                                    <td>Mobilio</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dwi Irsalina</td>
                                                    <td>L 1273 R</td>
                                                    <td>Xenia</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Rina Wijaya</td>
                                                    <td>L 7263 TY</td>
                                                    <td>Agya</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Rina Wijaya</td>
                                                    <td>L 7263 TY</td>
                                                    <td>Agya</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Mobil</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <!-- <th>No</th> -->
                                            <th>Nomor Plat</th>
                                            <th>Merk</th>
                                            <th>Tahun Keluaran</th>
                                            <th>Warna</th>
                                            <th>Jenis</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                                @foreach($mobil as $listmobil)
                                                    <tr>
                                                        <td>{{$listmobil->no_pol}}</td>
                                                        <td>{{$listmobil->merk_mobil}}</td>
                                                        <td>{{$listmobil->tahun_mesin}}</td>
                                                        <td>{{$listmobil->warna_mobil}}</td>
                                                        <td>{{$listmobil->jenis_mesin}}</td>
                                                        <td>
                                                            <button data-target="#myModal{{$listmobil->no_pol}}" type="button" data-toggle="modal" rel="tooltip" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                        </td>
    <div class="modal fade" id="myModal{{$listmobil->no_pol}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModal">Edit Data Pelanggan</h4>
            </div>
            <div class="modal-body">                       
                <form action="{{ url('/admin/mobil/update/'.$listmobil->no_pol) }}" method = "get">
                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nomor Plat</label>
                                                    <input type="text" class="form-control" name="no_pol" value="{{$listmobil->no_pol}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Merk Mobil</label>
                                                    <input type="text" class="form-control" name="merk_mobil" value="{{$listmobil->merk_mobil}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tahun Keluaran</label>
                                                    <input type="text" class="form-control" name="tahun_mesin" name="{{$listmobil->tahun_mesin}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Warna Mobil</label>
                                                    <input type="text" class="form-control" name="warna_mobil" value="{{$listmobil->warna_mobil}}">
                                                </div>
                                            </div>
                                        </div><br>
                                        <label>Jenis Mobil</label>
                                        <div class="row">
                                            <div class="dropdown col-md-3">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="jenis_mesin" value="AT">
                                                        AT
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="jenis_mesin" value="MT">
                                                        MT
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                    <br>
                    <button type="submit" class="btn btn-primary pull-right">Update Mobil</button>
                    <div class="clearfix"></div>
                </form>    
            </div>
        </div>
    </div>
</div>
                                                        <td>
                                                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{$listmobil->no_pol}}" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button>
                                                        </td>
<div id="modal-delete{{$listmobil->no_pol}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                    Anda yakin ingin menghapus data?<hr><br>
                        <form class="form-horizontal" role="form" method="get" action="{{ url('/admin/mobil/delete/'.$listmobil->no_pol) }}"><button>Iya</button>
                        </form>
                        <button>Tidak</button>
                    </center>
                </div>
            </div>
        </div>
</div>
                                                    </tr>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <!-- <button type="submit" class="btn btn-primary pull-right">Update Mobil</button> -->
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