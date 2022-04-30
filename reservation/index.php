<?php
include "../php/backend.php";
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/ico/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/ico/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets/ico/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets/ico/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/ico/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/ico/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <title>Booking</title>
</head>

<body>
    <section class="form">
        <div class="form valign">
            <h2>FORM BOOKING</h2>
            <form class="row g-3" action="proses-booking.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <label for="inputEmail" class="form-label">Unit PC</label>
                    <input type="text" class="form-control" id="inputEmail" name="Unit_PC">
                </div>


                <div class="col-md-2"></div>
                <div class="col-md-2"></div>


                <div class="col-md-8">
                    <label for="namapelanggan" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="namapelanggan" name="NP_Pelanggan">
                </div>


                <div class="col-md-2"></div>
                <div class="col-md-2"></div>


                <div class="col-4">
                    <label for="tglbln" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="jampenggunaan" placeholder="08xxxxxxx" name="No_Telp">
                </div>
                <div class="col-4">
                    <label for="tglbln" class="form-label">Tgl Bulan</label>
                    <input type="text" class="form-control" id="tglbln" placeholder="1 Januari" name="Tgl_Bln">
                </div>


                <div class="col-md-2"></div>
                <div class="col-md-2"></div>


                <div class="col-4">
                    <label for="waktupenggunaan" class="form-label">Jam</label>
                    <input type="text" class="form-control" id="waktupenggunaan" placeholder="15.00" name="Jam">
                </div>
                <div class="col-4">
                    <label for="waktupenggunaan" class="form-label">Waktu Penggunaan</label>
                    <input type="text" class="form-control" id="waktupenggunaan" placeholder="1 Jam" name="Waktu_Penggunaan">
                </div>


                <div class="col-md-2"></div>
                <div class="col-md-2"></div>


                <div class="col-md-4">
                    <img src="img/1.png" alt="Gambar" width="215px" height="215px" />
                </div>
                <div class="col-md-4">
                    <img src="img/2.png" alt="Gambar" width="215px" height="215px" />
                </div>
                <div class="col-md-8"></div>
                <div class="col-3">
                    <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </section>
</body>

</html>