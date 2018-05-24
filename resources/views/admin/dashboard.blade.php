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
                    <li class="active">
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
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Transaksi:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">assignment</i> All
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">assignment_turned_in</i> Verified
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="material-icons">delete_forever</i> not verified
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Pelanggan</th>
                                                    <th>No Rek</th>
                                                    <th>Jumlah Bayar</th>
                                                    <th>Tanggal</th>
                                                    <td></td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Nurotuz Zakiya</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Rakhma Rufaida</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Dwi Irsalina</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModal" type="button" data-toggle="modal" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Pelanggan</th>
                                                    <th>No Rek</th>
                                                    <th>Jumlah Bayar</th>
                                                    <th>Tanggal</th>
                                                    <td></td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rohana Qudus</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModalSee" type="button" data-toggle="modal" rel="tooltip" title="Lihat Bukti" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">insert_photo</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Nurotuz Zakiya</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModalSee" type="button" data-toggle="modal" rel="tooltip" title="Lihat Bukti" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">insert_photo</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>No</th>
                                                    <th>Pelanggan</th>
                                                    <th>No Rek</th>
                                                    <th>Jumlah Bayar</th>
                                                    <th>Tanggal</th>
                                                    <td></td>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dwi Irsaline</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModalSee" type="button" data-toggle="modal" rel="tooltip" title="Lihat Bukti" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">insert_photo</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Rakhma Rufaida</td>
                                                        <td>546527747</td>
                                                        <td>800.000</td>
                                                        <td>24-07-2017</td>
                                                        <td class="td-actions text-right">
                                                            <button data-target="#myModalSee" type="button" data-toggle="modal" rel="tooltip" title="Lihat Bukti" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">insert_photo</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<center>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Bukti Bayar</h4>
                </div>
                <div class="modal-body">
                    <center>    
                        <img src="../assets/img/gambar.jpg" alt="" class="img-responsive">
                    </center>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" style="padding: 1px 2px; height: 25px; width: 100px;">approve</button>
                    <button class="btn btn-danger" style="padding: 1px 2px; height: 25px; width: 100px;">disapprove</button>  
                </div>
            </div>
        </div>
    </div>

    <!-- Modal See -->
    <div class="modal fade" id="myModalSee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Bukti Bayar</h4>
                </div>
                <div class="modal-body">
                    <center>    
                        <img src="../assets/img/gambar.jpg" alt="" class="img-responsive">
                    </center>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</center>

                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Data Transaksi</h4>
                                    <p class="category">Semua transaksi yang ada</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>No</th>
                                            <th>Pelanggan</th>
                                            <th>Paket Kursus</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Rizka Annisa</td>
                                                <td>New Avanza MT</td>
                                                <td>Verified</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Shafira A Rahmadhani</td>
                                                <td>New Avanza AT</td>
                                                <td>Verified</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Dwi Irsalina</td>
                                                <td>New Avanza MT</td>
                                                <td>Not Verified</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Rina Wijaya</td>
                                                <td>New Agya MT</td>
                                                <td>Verified</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Shafira A Rahmadhani</td>
                                                <td>New Avanza AT</td>
                                                <td>Verified</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Dwi Irsalina</td>
                                                <td>New Avanza MT</td>
                                                <td>Not Verified</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Rina Wijaya</td>
                                                <td>New Agya MT</td>
                                                <td>Verified</td>
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

@include('admin.parts.footer')

</html>