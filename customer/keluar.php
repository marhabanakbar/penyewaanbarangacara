<?php
session_start();

    session_unset();
    session_destroy();

    echo "<script>alert('Logout Berhasil'); window.location='../customer/masuk.php';</script>"

?>