<?php
include '../php/koneksi.php';
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="">WARM-NET</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">Profile</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="login.php">Login</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <button class="btn btn-outline-danger" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </nav>
  </nav>


  <?php
  $query = mysqli_query($koneksi, "SELECT * FROM booking");
  while ($row = mysqli_fetch_assoc($query))
  ?>


  <section class="form">
    <div class="form valign">
      <h2>FORM BOOKING</h2>
      <form class="row g-3" action="proses-booking.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <label for="inputEmail" class="form-label">Paket</label>
          <select class="form-select" aria-label="Default select example" id="inputEmail" name="Unit_PC">
            <option selected>Pilih Paket</option>
            <option value="Hemat">Hemat (1-8)</option>
            <option value="Panas">Panas (9-15)</option>
            <option value="SuperBesar">SuperBesar 16-20</option>
          </select>
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


        <div class="col-md-4">
          <img src="img/1.png" alt="Gambar" width="215px" height="215px" />
        </div>
        <div class="col-md-4">
          <img src="img/2.1.png" alt="Gambar" width="215px" height="215px" />
        </div>

        <div class="col-md-4">
          <img src="img/3.png" alt="Gambar" width="215px" height="215px" />
        </div>
        <div class="col-md-5"></div>
        <div class="col-3">
          <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
        </div>
      </form>
    </div>
    </div>
  </section>




</body>

</html>