<?php
// Include database connection file
include 'koneksi.php';
$username = $_GET['username'];
$result = mysqli_query($koneksi, "DELETE FROM data_user WHERE username='$username'");
header("Location:data_user.php");
?>