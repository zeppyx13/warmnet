<?php
$konek = mysqli_connect('localhost', 'root', '', 'warnet');

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

// fuction login/register user
function registrasi($data)
{
    global $konek;

    $nama = mysqli_real_escape_string($konek, $data["nama"]);
    $email = ($data["email"]);
    $password = mysqli_real_escape_string($konek, $data["password"]);
    $password2 = mysqli_real_escape_string($konek, $data["password2"]);
    $result = mysqli_query($konek, "SELECT email From pelanggan WHERE email='$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
        alert('no telphone sudah digunakan')
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

    mysqli_query($konek, "INSERT INTO pelanggan VALUES('user','','$nama','$password','$email')");

    return mysqli_affected_rows($konek);
}
