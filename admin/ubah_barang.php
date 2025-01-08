<?php
include 'koneksi.php'; // Pastikan koneksi database sudah tersedia
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$stock = $_POST['stock'];
// Cek apakah file baru diunggah untuk gambar
if (isset($_FILES['gambar']['name']) && $_FILES['gambar']['name'] != '') {
    $gambar= $_FILES['gambar']['name'];
    $targetGambar = 'asset/' . basename($gambar);
    // Upload file baru
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetGambar)) {
        // Hapus gambar lama jika ada
        $queryGambar = mysqli_query($koneksi, 'SELECT gambar FROM data_barang WHERE id_barang = ' . $id_barang);
        $oldGambar = mysqli_fetch_assoc($queryGambar)['gambar'];
        if ($oldGambar && file_exists('asset/' . $oldGambar)) {
            unlink('asset/' . $oldGambar);
        }
    } else {
        echo "Gagal mengunggah gambar.";
        exit;
    }
} else {
    // Jika tidak ada file baru, tetap gunakan gambar lama
    $queryGambar = mysqli_query($koneksi, 'SELECT gambar FROM data_barang WHERE id_barang = ' . $id_barang);
    $gambar = mysqli_fetch_assoc($queryGambar)['gambar'];
}
// Perbarui data di database
$queryUpdate = "UPDATE data_barang 
                SET nama_barang = '" . mysqli_real_escape_string($koneksi, $nama_barang) . "',
                    gambar = '" . mysqli_real_escape_string($koneksi, $gambar) . "', 
                    deskripsi = '" . mysqli_real_escape_string($koneksi, $deskripsi) . "', 
                    stock = '" . mysqli_real_escape_string($koneksi, $stock) . "' 
                WHERE id_barang = '$id_barang'";
if (mysqli_query($koneksi, $queryUpdate)) {
    header('Location: data_barang.php?status=success'); // Redirect ke halaman utama dengan status berhasil
} else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
}
?>