<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../");
    exit;
}
require '../php/backend.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
dashboard user
<a href="../php/logout.php">
    <button>
        logout
    </button>
</a>

<body>

</body>

</html>