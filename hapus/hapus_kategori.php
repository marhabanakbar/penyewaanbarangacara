<?php

$id_data_kategori = $_GET['id'];

if (!isset($id_data_kategori) || empty($id_data_kategori)) {
    echo "<div class='alert alert-danger'>ID kategori tidak ditemukan.</div>";
    exit;
}

$cek = $conn->query("SELECT * FROM data_kategori WHERE id_data_kategori = '$id_data_kategori'");
if ($cek->num_rows == 0) {
    echo "<div class='alert alert-danger'>Data kategori tidak ditemukan.</div>";
    exit;
}

// Hapus data berdasarkan ID
$hapus = $conn->query("DELETE FROM data_kategori WHERE id_data_kategori = '$id_data_kategori'");
if ($hapus) {
    echo "<script>
        alert('Data berhasil dihapus.');
        window.location = 'index.php?halaman=kategori'; // Redirect ke halaman kategori
    </script>";
} else {
    echo "<div class='alert alert-danger'>Pesan gagal dihapus. Silakan coba lagi.</div>";
}
?>