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