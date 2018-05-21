<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Dashboard</title>
	@include('pelanggan.parts.header')
</head>
<body>
	@include('pelanggan.parts.navbar')

    <div id="particle" style="width:100%; height:100%; top:0; position:fixed; z-index:-1"></div>
    <div style="width:100%; min-height:100vh; padding-top:70px">
        <div class="container">
            <center><h1><span class="glyphicon glyphicon-user"></span> <b>Dashboard</b></h2></center>
            <hr>
            <div class="row">
                <div class="col-sm-12" style="margin-bottom:1em; text-align:center">
                    <h3>Halo, <b>Rizka Annisa K.S!</b></h3>
                </div>
                <div class="col-sm-6">
                    <div style="width:100%; margin-bottom:1em; padding:1em; border:solid 1px lightgrey; background-color:#fff; min-height:320px">
                        <h4><b>Data Akun</b> <!-- <a class="pull-right" data-toggle="modal" data-target="#modal-akun" href="#modal-akun">ubah</a></h4> -->
                        <hr>
                        <p><b>Username:</b> ini.emailnya</p>
                        <p><b>Nama Lengkap:</b> Rizka Annisa K.S</p>
                        <p><b>Alamat:</b> JL. Tj Jati I Krembangan Selatan</p>
                        <p><b>Telepon:</b> 087887061221</p>
                        <p><b>Jenis Kelamin:</b> Perempuan</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div style="width:100%; margin-bottom:1em; padding:1em; border:solid 1px lightgrey; background-color:#fff; min-height:320px">
                        <h4><b>Status Pembayaran</b> <a class="pull-right" data-toggle="modal" data-target="#modal-akun" href="#modal-akun">Batalkan Kursus</a></h4>
                        <hr>
                        <p><b>Paket Kursus: <span style="color:#e2be22">New Avanza MT</span></b></p>
                        <p><b>Status: <span style="color:#c84429">Belum melakukan pembayaran</span></b></p>
                        <div class="row" style="text-align:center; font-size:0.8em; margin-top:3em">
                            <div class="col-xs-3">
                                <span style="font-size:2.4em; color:green" class="glyphicon glyphicon-ok"></span><br>Daftar
                            </div>
                            <div class="col-xs-3">
                                <span style="font-size:2.4em; color:#c84429" class="glyphicon glyphicon-minus"></span><br>Pembayaran
                            </div>
                            <div class="col-xs-3">
                                <span style="font-size:2.4em; color:#c84429" class="glyphicon glyphicon-minus"></span><br>Konfirmasi Admin
                            </div>
                            <div class="col-xs-3">
                                <span style="font-size:2.4em; color:#c84429" class="glyphicon glyphicon-minus"></span><br>Pendaftaran Berhasil
                            </div>
                            </div>
                                <button data-toggle="modal" data-target="#modal-konf" class="btn btn-sch-color" style="margin-top:2em; width:100%">KONFIRMASI PEMBAYARAN</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="width:97.5%; margin:1em; padding:1em; border:solid 1px lightgrey; background-color:#fff; min-height:320px">
                        <h4><b>Jadwal Kursus</b> <!-- <a class="pull-right" data-toggle="modal" data-target="#modal-akun" href="#modal-akun">ubah</a></h4> -->
                        <hr>
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
                                                <td>01<br><br></td>
                                                <td>02<br>
                                                    15.00-17.00</td>
                                                <td>03<br><br></td>
                                                <td>04<br><br></td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>06<br>
                                                    09.00-11.00
                                                </td>
                                                <td>07<br><br></td>
                                                <td>08<br><br></td>
                                                <td>09<br><br></td>
                                                <td>10<br><br></td>
                                                <td>11<br><br></td>
                                            </tr>
                                            <tr>
                                                <td>12<br>
                                                    15.00-17.00
                                                </td>
                                                <td>13<br><br></td>
                                                <td>14<br><br></td>
                                                <td>15<br><br></td>
                                                <td>16<br><br></td>
                                                <td>17<br>
                                                    09.00-11.00</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td>19<br><br></td>
                                                <td>20<br><br></td>
                                                <td>21<br>
                                                    12.00-14.00</td>
                                                <td>22<br><br></td>
                                                <td>23<br><br></td>
                                                <td>24<br><br></td>
                                                <td>25<br>
                                                    15.00-17.00</td>
                                            </tr>
                                            <tr>
                                                <td>26<br><br></td>
                                                <td>27<br><br></td>
                                                <td>28<br><br></td>
                                                <td>29<br>
                                                    15.00-17.00</td></td>
                                                <td>30<br><br></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <button data-target="#myModal" type="button" data-toggle="modal" class="btn btn-primary pull-right">Update Jadwal</button>
                                    <div class="clearfix"></div>
                                </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button data-toggle="modal" data-target="#myModalSee" class="btn btn-sch-color" style="margin-bottom:2em; margin-bottom:2em;width:100%">Hasil Evaluasi</button>
                </div>
            </div>
        </div>
    </div>

<center>
    <!-- Modal See -->
    <div class="modal fade" id="myModalSee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Hasil Evaluasi</h4>
                </div>
                <div class="modal-body">                    
                                <div class="card-content">
                                    <div class="table-responsive table-upgrade">
                                        <table class="table">
                                            <thead>
                                                <th></th>
                                                <th class="text-center">Parameter</th>
                                                <th class="text-center">Nilai</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Menyalakan mesin</td>
                                                    <td class="text-center">80</td>
                                                    <td class="text-center">100</td>
                                                </tr>
                                                <tr>
                                                    <td>Perpindahan gigi</td>
                                                    <td class="text-center">70</td>
                                                    <td class="text-center">80</td>
                                                </tr>
                                                <tr>
                                                    <td>Melakukan rem</td>
                                                    <td class="text-center">80</td>
                                                    <td class="text-center">85</td>
                                                </tr>
                                                <tr>
                                                    <td>Haluan</td>
                                                    <td class="text-center">70</td>
                                                    <td class="text-center">65</td>
                                                </tr>
<!--                                                 <tr>
                                                    <td>Atitude mengemudi</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">75</td>
                                                </tr> -->
                                                <tr>
                                                    <td>Parkir lurus</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">80</td>
                                                </tr>
                                                <tr>
                                                    <td>Parkir sirip</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">75</td>
                                                </tr>
                                                <tr>
                                                    <td>Parkir paralel</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">80</td>
                                                </tr>
                                                <tr>
                                                    <td><bold>Nilai Akhir</bold></td>
                                                    <td class="text-center">700</td>
                                                    <td class="text-center">630</td>
                                                </tr>
                                               <!--  <tr>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">
                                                        <a target="_blank" href="#" class="btn btn-round btn-fill btn-info">Update Nilai</a>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</center>

    <div id="modal-akun" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                    Anda yakin ingin membatalkan kursus? (y/n)<hr><br>
                        <button>yes</button>
                        <button>no</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    
    <div id="modal-konf" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center><h3><b>Konfirmasi Pembayaran</b></h3><hr></center>
                    <select class="form-control" style="margin-bottom:0.5em">
                        <option disabled selected>ATM</option>
                        <option>Mandiri</option>
                        <option>BCA</option>
                        <option>BNI</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Nomor Rekening" style="margin-bottom:0.5em" required autofocus>
                    <input type="text" class="form-control" placeholder="Atas Nama" style="margin-bottom:0.5em" required autofocus>
                    <input type="number" class="form-control" placeholder="Jumlah Transfer" style="margin-bottom:1em; width:100%;" required autofocus>
                    <label for="bukti">Upload Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="bukti">
                    <button type="submit" class="btn btn-sch-grey" style="width:100%; margin-bottom:1em; margin-top:2em">KONFIRMASI</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Isi jadwal</h4>
            </div>
            <div class="modal-body">                       
                <form>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Nama Pelanggan</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Nama Instruktur</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Tanggal</label> -->
                                <label>Tanggal</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Jam</label> -->
                                <label>Jam Mulai</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <!-- <label class="control-label">Jam</label> -->
                                <label>Jam Berakhir</label>
                                <input type="time" class="form-control">
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

    @include('pelanggan.parts.footer')
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.particleground.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script type="text/javascript">
        $("#navi").css('background-color','transparent');
        $("#navi").css('border','none');
        $(".dropdown-toggle").css('background-color','transparent');
        $(window).scroll(function() {
            var x = $(window).scrollTop();
            if (x == 0) {
              $("#navi").css('background-color','transparent');
              $("#navi").css('border','none');
              $(".dropdown-toggle").css('background-color','transparent');
            } else {
              $("#navi").css('background-color','white');
              $("#navi").css('border','');
              $(".dropdown-toggle").css('background-color','');
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            window.sr = ScrollReveal({ duration: 900 }).reveal('.scrollreveal');   
        });
    </script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            particleground(document.getElementById('particle'), {
                dotColor: 'rgba(0,0,0,0.08)',
                lineColor: 'rgba(0,0,0,0.08)'
            });
        }, false);
    </script>
</body>

</html>
