<?php
session_start();
require '../koneksi/koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];
    
    
    if($data['role']== '1'){
        echo "<script>alert('Login Berhasil'); window.location.href='../admin/index.php';</script>";
    }
    else if($data['role']=='2'){
        echo "<script>alert('Login Berhasil'); window.location.href='../customer/home.php';</script>";
    }

} else {
    echo "<script>alert('Login Gagal'); window.location.href='./masuk.php';</script>";
}
?>