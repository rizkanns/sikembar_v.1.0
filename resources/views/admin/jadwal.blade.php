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
                    <li class="active">
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
                                    <h4 class="title">Jadwal Kursus</h4>
                                    <p class="category">Bulan Novermber 2017</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Senin</th>
                                            <th>Selasa</th>
                                            <th>Rabu</th>
                                            <th>Kamis</th>
                                            <th>Jumat</th>
                                            <th>Sabtu</th>
                                            <th>Minggu</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>01<br><br><br></td>
                                                <td>02<br>Rizka Annisa<br>
                                                    15.00-17.00</td>
                                                <td>03<br><br><br></td>
                                                <td>04<br><br><br></td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>06<br>Rizka Annisa<br>
                                                    09.00-11.00
                                                </td>
                                                <td>07<br><br><br></td>
                                                <td>08<br><br><br></td>
                                                <td>09<br><br><br></td>
                                                <td>10<br><br><br></td>
                                                <td>11<br><br><br></td>
                                            </tr>
                                            <tr>
                                                <td>12<br>Rizka Annisa<br>
                                                    15.00-17.00
                                                </td>
                                                <td>13<br><br><br></td>
                                                <td>14<br><br><br></td>
                                                <td>15<br><br><br></td>
                                                <td>16<br><br><br></td>
                                                <td>17<br>Annisa<br>
                                                    09.00-11.00</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td>19<br><br><br></td>
                                                <td>20<br><br><br></td>
                                                <td>21<br>Shafira AR<br>
                                                    12.00-14.00</td>
                                                <td>22<br><br><br></td>
                                                <td>23<br><br><br></td>
                                                <td>24<br><br><br></td>
                                                <td>25<br>Rizka Annisa<br>
                                                    15.00-17.00</td>
                                            </tr>
                                            <tr>
                                                <td>26<br><br><br></td>
                                                <td>27<br><br><br></td>
                                                <td>28<br><br><br></td>
                                                <td>29<br>Dwi Irsalina<br>
                                                    15.00-17.00</td></td>
                                                <td>30<br><br><br></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-primary pull-right">Tambah Jadwal</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Jadwal Kursus</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Instruktur</th>
                                            <th>Tanggal</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Berakhir</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($jadwal as $listjadwal)
                                                <td>{{$listjadwal->id_jadwal}}</td>
                                                <td>{{$listjadwal->username}}</td>
                                                <td>{{$listjadwal->no_induk}}</td>
                                                <td>{{$listjadwal->tanggal_kursus}}</td>
                                                <td>{{$listjadwal->jam_mulai}}</td>
                                                <td>{{$listjadwal->jam_selesai}}</td>
                                                <td>
                                                    <button data-target="#editModal{{$listjadwal->id_jadwal}}" type="button" data-toggle="modal" class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 80px;">Edit</button>
                                                </td>


<div id="editModal{{$listjadwal->id_jadwal}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update jadwal</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/jadwal/update/'.$listjadwal->id_jadwal) }}" method = "get">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Username</label>
                            <input disabled type="text" class="form-control" name="tanggal_kursus" value="{{$listjadwal->username}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>No Induk</label>
                            <input disabled type="text" class="form-control" name="tanggal_kursus" value="{{$listjadwal->no_induk}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Tanggal</label> -->
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal_kursus" value="{{$listjadwal->tanggal_kursus}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Jam</label> -->
                                <label>Jam Mulai</label>
                                <input type="time" class="form-control" name="jam_mulai" value="{{$listjadwal->jam_mulai}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Jam</label> -->
                                <label>Jam Berakhir</label>
                                <input type="time" class="form-control" name="jam_selesai" value="{{$listjadwal->jam_selesai}}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary pull-right">Update Jadwal</button>
                    <div class="clearfix"></div>
                </form>    
                </div>
            </div>
        </div>
</div>

                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{$listjadwal->id_jadwal}}" href="#modal-akun" style="padding: 1px 2px; height: 25px; width: 80px;">Delete</button> 
                                                </td>

                                                <div id="modal-delete{{$listjadwal->id_jadwal}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                    Anda yakin ingin menghapus data?<hr><br>
                        <form class="form-horizontal" role="form" method="get" action="{{ url('/admin/jadwal/delete/'.$listjadwal->id_jadwal) }}"><button>Iya</button>
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
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="0" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Isi jadwal</h4>
            </div>
            <div class="modal-body">                       
                <form action="{{ url('/admin/jadwal/insert') }}" method = "post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <select class="form-control" style="margin-bottom:1.2em; float:left; margin-right:0.01%" name="username">
                                <option disabled selected>Nama Pelanggan</option>
                                @foreach ($username as $listusername)
                                    <option value="{{$listusername->username}}">{{$listusername->nama_pelanggan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <select class="form-control" style="margin-bottom:1.2em; float:left; margin-right:0.01%" name="no_induk">
                                <option disabled selected>Nama Instruktur</option>
                                @foreach ($instruktur as $listinstruktur)
                                    <option value="{{$listinstruktur->no_induk}}">{{$listinstruktur->nama_instruktur}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Tanggal</label> -->
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal_kursus">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Jam</label> -->
                                <label>Jam Mulai</label>
                                <input type="time" class="form-control" name="jam_mulai">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Jam</label> -->
                                <label>Jam Berakhir</label>
                                <input type="time" class="form-control" name="jam_selesai">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Tambahkan Jadwal</button>
                    <div class="clearfix"></div>
                </form>    
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