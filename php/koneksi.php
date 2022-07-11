<?php
$koneksi = mysqli_connect("localhost", "warmnets_gungnanda", "dXUtqbL5avEwmZJ", "warmnets_db");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
