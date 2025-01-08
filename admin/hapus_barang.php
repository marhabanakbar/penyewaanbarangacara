<?php
include 'koneksi.php';
$id_barang = $_GET['id_barang'];

$query = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id_barang = '$id_barang'");
$data = mysqli_fetch_assoc($query);
unlink("asset/" . $data['gambar']);

mysqli_query($koneksi, "DELETE FROM data_barang WHERE id_barang = '$id_barang'");
echo "<script>alert('Data berhasil dihapus!'); window.location='data_barang.php';</script>";
?>