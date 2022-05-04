<?php
$konek = mysqli_connect('localhost', 'root', '', 'warmnet');

function query($query)
{
    global $konek;
    $result = mysqli_query($konek, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    global $konek;
    $metode = $data["metode"];
    $email = $data["email"];
    $gambar = uploadfoto();
    if (!$gambar) {
        return false;
    }
    $query = "INSERT INTO billing VALUES('','$gambar','$metode','$email')";
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}
function add($data)
{
    global $konek;
    $hari = $data["hari"];
    $bukti = gbr();
    if (!$bukti) {
        return false;
    }
    $query = "INSERT INTO pendapatan VALUES('','$hari','$bukti')";
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}
// 
function gbr()
{
    $namafile = $_FILES['bukti']['name'];
    $ukuranfile = $_FILES['bukti']['size'];
    $error = $_FILES['bukti']['error'];
    $tmpName = $_FILES['bukti']['tmp_name'];
    if ($error === 4) {
        echo "
        <script>
        alert('insert image')
        </script>
        ";
        return false;
    }
    $filegambar = ['jpg', 'jpeg', 'png', 'jfif', 'raw', 'webp'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $filegambar)) {
        echo "
        <script>
        alert('file not supported')
        </script>
        ";
        return false;
    }
    if ($ukuranfile > 11000000) {
        echo "
        <script>
        alert('file size not supported ')
        </script>
        ";
        return false;
    }
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    move_uploaded_file($tmpName, '../assets/bukti/report/' . $namafilebaru);
    return $namafilebaru;
}
// 
function uploadfoto()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    if ($error === 4) {
        echo "
        <script>
        alert('insert image')
        </script>
        ";
        return false;
    }
    $filegambar = ['jpg', 'jpeg', 'png', 'jfif', 'raw', 'webp'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $filegambar)) {
        echo "
        <script>
        alert('file not supported')
        </script>
        ";
        return false;
    }
    if ($ukuranfile > 11000000) {
        echo "
        <script>
        alert('file size not supported ')
        </script>
        ";
        return false;
    }
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    move_uploaded_file($tmpName, '../assets/bukti/' . $namafilebaru);
    return $namafilebaru;
}
function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    if ($error === 4) {
        echo "
        <script>
        alert('insert image')
        </script>
        ";
        return false;
    }
    $filegambar = ['jpg', 'jpeg', 'png', 'jfif', 'raw', 'webp'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $filegambar)) {
        echo "
        <script>
        alert('file not supported')
        </script>
        ";
        return false;
    }
    if ($ukuranfile > 11000000) {
        echo "
        <script>
        alert('file size not supported ')
        </script>
        ";
        return false;
    }
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    move_uploaded_file($tmpName, '../assets/img/' . $namafilebaru);
    return $namafilebaru;
}
// update
function ubah($data)
{
    global $konek;
    $id = $data["id"];
    $nama = $data["nama"];
    $email = $data["email"];
    $tlp = $data["tlp"];
    $gambarlama = ($data["gambarlama"]);
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }
    $query = "UPDATE pelanggan SET nama='$nama', email='$email',tlp='$tlp', gambar='$gambar' WHERE id=$id ";

    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}
// fuction login/register user
function registrasi($data)
{
    global $konek;

    $nama = mysqli_real_escape_string($konek, $data["nama"]);
    $tlp = mysqli_real_escape_string($konek, $data["tlp"]);
    $email = ($data["email"]);
    $password = mysqli_real_escape_string($konek, $data["password"]);
    $password2 = mysqli_real_escape_string($konek, $data["password2"]);
    $result = mysqli_query($konek, "SELECT email From pelanggan WHERE email='$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
        alert('Email sudah di sudah digunakan')
        </script>
        ";
        return false;
    }
    if ($password !== $password2) {
        echo "
        <script>
        alert('password gk sama')
        </script>
        ";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($konek, "INSERT INTO pelanggan VALUES('user','','$nama','$password','$email','$tlp','user1.jpg')");

    return mysqli_affected_rows($konek);
}
