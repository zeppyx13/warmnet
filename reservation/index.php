<?php
include '../php/koneksi.php';
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../login.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta htpp-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../assets/ico/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../assets/ico/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../assets/ico/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../assets/ico/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../assets/ico/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="../assets/ico/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="../assets/ico/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="../assets/ico/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="../assets/ico/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="../assets/ico/favicon-128.png" sizes="128x128" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Booking</title>
</head>

<body>
  <section class="form">
    <div class="form valign">
      <h2>FORM BOOKING</h2>
      <form style="padding: 20px;" class="row g-3" action="../php/booking.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <label for="inputEmail" class="form-label">Paket</label>
          <select required class="form-select" aria-label="Default select example" id="inputEmail" name="paket">
            <option value="bkn" selected>Pilih Paket</option>
            <option value="Hemat">Hemat (1-8)Rp. 10.000)</option>
            <option value="Panas">Panas (9-15)Rp. 15.000)</option>
            <option value="SuperBesar">SuperBesar (16-20)Rp. 25.000)</option>
          </select>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <label for="namapelanggan" class="form-label">nama</label>
          <input type="text" required autocomplete="off" class="form-control" id="namapelanggan" name="nama">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-4">
          <label for="tglbln" class="form-label">No Telp</label>
          <input type="int" required autocomplete="off" class="form-control" id="jampenggunaan" placeholder="08xxxxxxx" name="tlp">
        </div>
        <div class="col-4">
          <label for="tglbln" class="form-label">Tgl Bulan</label>
          <input type="date" class="form-control" id="tglbln" placeholder="1 Januari" required name="date">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-4">
          <label for="waktupenggunaan" class="form-label">Jam</label>
          <input type="time" required class="form-control" id="waktupenggunaan" placeholder="15.00" name="jam">
        </div>
        <div class="col-4">
          <label for="waktupenggunaan" class="w form-label">Waktu Penggunaan</label>
          <input type="number" required autocomplete="off" class="i form-control" id="waktupenggunaan" placeholder="1 Jam" name="waktu">
        </div>
        <div class="col-md-4">
          <img class="g1" src="img/1.png" alt="Gambar" width="215px" height="215px" />
        </div>
        <div class="col-md-4">
          <img class="g2" src="img/2.1.png" alt="Gambar" width="215px" height="215px" />
        </div>
        <div class="col-md-4">
          <img class="g3" src="img/3.png" alt="Gambar" width="215px" height="215px" />
        </div>
        <div class="col-md-5"></div>
        <div class="col-3 about_us">
          <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
        </div>
      </form>
    </div>
    </div>
  </section>
</body>

</html>