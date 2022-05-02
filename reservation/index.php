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

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Booking</title>
</head>

<body>
  <section class="form">
    <div class="form valign">
      <h2>FORM BOOKING</h2>
      <form class="row g-3" action="../php/booking.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <label for="inputEmail" class="form-label">Paket</label>
          <select class="form-select" aria-label="Default select example" id="inputEmail" name="paket">
            <option selected>Pilih Paket</option>
            <option value="Hemat">Hemat (1-8)</option>
            <option value="Panas">Panas (9-15)</option>
            <option value="SuperBesar">SuperBesar 16-20</option>
          </select>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <label for="namapelanggan" class="form-label">nama</label>
          <input type="text" class="form-control" id="namapelanggan" name="nama">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-4">
          <label for="tglbln" class="form-label">No Telp</label>
          <input type="int" class="form-control" id="jampenggunaan" placeholder="08xxxxxxx" name="tlp">
        </div>
        <div class="col-4">
          <label for="tglbln" class="form-label">Tgl Bulan</label>
          <input type="date" class="form-control" id="tglbln" placeholder="1 Januari" name="date">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-4">
          <label for="waktupenggunaan" class="form-label">Jam</label>
          <input type="time" class="form-control" id="waktupenggunaan" placeholder="15.00" name="jam">
        </div>
        <div class="col-4">
          <label for="waktupenggunaan" class="form-label">Waktu Penggunaan</label>
          <input type="text" class="form-control" id="waktupenggunaan" placeholder="1 Jam" name="waktu">
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