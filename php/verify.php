<?php
session_start();
require 'backend.php';

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $Name = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($konek, "SELECT nama FROM pelanggan WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
    if ($key == hash('sha256', $row['nama'])) {
        $_SESSION['login'] || $_SESSION['admin'] = true;
    }
}

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($konek, "SELECT * FROM pelanggan WHERE email ='$email'");

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            if ($row['lvl'] == "user" && $_SESSION["login"] = true) {
                if (isset($_POST['ingat'])) {
                    setcookie('Name', $row['id'], time() + 10800);
                    setcookie('velue', hash('sha256', $row['$username']), time() + 10800);
                }

                $_SESSION['email'] = $email;
                $_SESSION['lvl'] = "user";

                header("location:../user/");
            } else if ($row['lvl'] == "admin" && $_SESSION["admin"] = true) {
                if (isset($_POST['ingat'])) {
                    setcookie('Name', $row['id'], time() + 43200);
                    setcookie('velue', hash('sha256', $row['$username']), time() + 43200);
                }
                $_SESSION['email'] = $email;
                $_SESSION['lvl'] = "admin";

                header("location:../oprator/");
            } else {


                header("location:../login.php");
                return false;
            }
            exit;
        }
        header("Location:../login.php");
        exit;
    }
    header("Location:../login.php");
    exit;
}
