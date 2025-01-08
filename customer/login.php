<?php
session_start();
require '../koneksi/koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

// Pseudocode:
// 1. Function login(username, password):
//    a. Get user record from database by username
//    b. If user not found, return "User not found"
//    c. Verify password
//    d. If password is correct, start session and redirect to dashboard
//    e. If password is incorrect, return "Invalid password"

// Query untuk mengambil user dari database berdasarkan username dan password
$query_sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

// Menggunakan fungsi bawaan mysqli_query untuk menjalankan query SQL
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) { // Mengecek apakah ada hasil dari query
    $data = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    if($data['role'] == '1') {
        echo "<script>alert('Login Berhasil'); window.location.href='../admin/index.php';</script>";
    } else if($data['role'] == '2') {
        echo "<script>alert('Login Berhasil'); window.location.href='../customer/home.php';</script>";
    } else {
        echo "<script>alert('Login Gagal'); window.location.href='../masuk.php';</script>";
    }
} else {
    echo "<script>alert('Login Gagal'); window.location.href='../masuk.php';</script>";
}
?>
