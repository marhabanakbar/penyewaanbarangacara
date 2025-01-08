<?php
// include database connection file
include 'koneksi.php';
    $nama= $_POST['nama'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $no_telepon=$_POST['no_telepon'];
    $alamat=$_POST['alamat'];
    $password=$_POST['password'];
    $result = mysqli_query($koneksi, "UPDATE data_user SET nama='$nama',username='$username',email='$email',no_telepon='$no_telepon',alamat='$alamat',password='$password'");
    // Redirect to homepage to display update user in list
  header("Location: data_user.php");
?>