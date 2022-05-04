<?php
require "backend.php";
if (isset($_POST["submit"])) {
    if (add($_POST) > 0) {
        echo "<script>
    alert('Report berhasil')
    document.location.href='../oprator/pages/billing.php';
    </script>
    ";
    } else {
        echo mysqli_error($konek);
    }
}
