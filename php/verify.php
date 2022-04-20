<?php
session_start();
require 'backend.php';

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($konek, "SELECT * FROM pelanggan WHERE email ='$email'");

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            if ($row['lvl'] == "user" && $_SESSION["login"] = true) {


                $_SESSION['email'] = $email;
                $_SESSION['lvl'] = "user";

                header("location:../user/");
            } else if ($row['lvl'] == "admin" && $_SESSION["admin"] = true) {

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
