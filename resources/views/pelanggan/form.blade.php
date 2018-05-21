<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Pendaftaran Kursus</title>
	@include('pelanggan.parts.header')
</head>
<body>
	@include('pelanggan.parts.navbar')

    <div id="particle" style="width:100%; height:100%; top:0; position:fixed; z-index:-1"></div>
    <div style="width:100%; min-height:100vh; padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div style="text-align:center">
                        <h3><b>FORMULIR PENDAFTARAN KURSUS</b></h3>
                        <hr><br>
                    </div>
                </div>
                <div id="form-nlc">
                    <div class="col-sm-6">
                            <p><b>---Harga Kursus---</b></p>
                            <p>New Avanza Matic - Rp 800.000 / paket</p>
                            <p>Toyota Agya Matic - Rp 800.000 / paket</p>
                            <p>Grand Avanza Manual - Rp 900.000 / paket</p>
                            <p>New Avanza Maanual - Rp 900.000 / paket</p>
                            <p>New Xenia Matic - Rp 800.000 / paket</p>
                            <p>New Ayla Matic - Rp 800.000 / paket</p>
                            <br>
                    </div>
                    <div class="col-sm-6">
                        <p><b>Paket Kursus</b></p>
                        <select class="form-control" style="margin-bottom:1.2em; float:left; margin-right:0.01%">
                                <option disabled selected>Paket</option>
                                <option disabled><b>-- Matic --</b></option>
                                <option>New Avanza MT</option>
                                <option>Mobilio MT</option>
                                <option>Toyota Agya MT</option>
                                <option disabled><b>-- Automatic --</b></option>
                                <option>New Avanza AT</option>
                                <option>Mobilio AT</option>
                                <option>Toyota Agya AT</option>
                            </select>
                    </div>
                    <div class="col-sm-12" style="margin-bottom:2em">
                        <button class="btn btn-lg btn-sch-color" style="width:100%">DAFTAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pelanggan.parts.footer')
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.particleground.js"></script>
<!--     <script type="text/javascript">
        $("#form-nlc").hide();
        $("#form-npc").hide();
        $('#event-select').change(function(){
            if($(this).val() == 1){
                $("#form-npc").hide();
                $("#form-nlc").show();
            }
            else if($(this).val() == 2){
                $("#form-nlc").hide();
                $("#form-npc").show();
            }
        });

    </script> -->
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
        document.addEventListener('DOMContentLoaded', function () {
            particleground(document.getElementById('particle'), {
                dotColor: 'rgba(0,0,0,0.08)',
                lineColor: 'rgba(0,0,0,0.08)'
            });
        }, false);
    </script>
</body>

</html>
