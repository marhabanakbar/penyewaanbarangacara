<?php
require '../koneksi/koneksi.php';

$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$alamat = $_POST["alamat"];
$password = $_POST["password"];
$konfirmasi = $_POST["konfirmasi"];

$role = 2;
$query_sql = "INSERT INTO user (username, email, phone, alamat, password, konfirmasi, role)
                VALUES ('$username', '$email', '$phone', '$alamat', '$password', '$konfirmasi', '$role')";

if (mysqli_query($conn, $query_sql)){
    header("Location: masuk.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}