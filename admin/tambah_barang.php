<?php
include 'koneksi.php';
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$stock = $_POST['stock'];
// Validasi file gambar 
$gambar = $_FILES['gambar']['name'];
$ukuran_gambar = $_FILES['gambar']['size'];
$tmp_gambar = $_FILES['gambar']['tmp_name'];
$ekstensi_gambar_diperbolehkan = array('jpg', 'jpeg', 'png');
$x_gambar = explode('.', $gambar);
$ekstensi_gambar = strtolower(end($x_gambar));
$path_gambar = "asset/" . $gambar;
// Validasi ekstensi dan ukuran file
if (in_array($ekstensi_gambar, $ekstensi_gambar_diperbolehkan) && $ukuran_gambar <= 2000000) {
        // Pindahkan file ke folder tujuan
        if (move_uploaded_file($tmp_gambar, $path_gambar)) {
            // Simpan data ke database
            $query = "INSERT INTO data_barang (id_barang, nama_barang, gambar, deskripsi, stock) VALUES ('$id_barang', '$nama_barang', '$gambar', '$deskripsi', '$stock')";

            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Data berhasil ditambahkan!'); window.location='data_barang.php';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan data ke database!'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Gagal mengunggah file!'); window.history.back();</scirpt>";
        }
} else {
    echo "<script>alert('File gambar tidak valid atau ukurannya terlalu besar!'); window.history.back();</script>";
}
?>
