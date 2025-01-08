<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$no_telepon = $_POST['no_telepon'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$input = mysqli_query($koneksi, "INSERT INTO data_user (nama, username, email, no_telepon, alamat, password) VALUES ('$nama', '$username', '$email', '$no_telepon', '$alamat', '$password')") or die(mysqli_error($koneksi));

if($input){
    echo "<script>
            alert('Data Berhasil Disimpan');
            window.location.href = 'data_user.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal Menyimpan Data');
            window.location.href = 'data_user.php';
          </script>";
}
?>