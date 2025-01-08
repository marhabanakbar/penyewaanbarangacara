<?php

$id_pesan = $_GET['id'];


if (!isset($id_pesan) || empty($id_pesan)) {
    echo "<div class='alert alert-danger'>ID pesan tidak ditemukan.</div>";
    exit;
}

// Koneksi ke database
require '../koneksi/koneksi.php'; // Pastikan koneksi database sudah benar

// Cek apakah pesan dengan ID tersebut ada
$cek = $conn->query("SELECT * FROM pesan WHERE id_pesan = '$id_pesan'");
if ($cek->num_rows == 0) {
    echo "<div class='alert alert-danger'>Data pesan tidak ditemukan.</div>";
    exit;
}

// Hapus data berdasarkan ID
$hapus = $conn->query("DELETE FROM pesan WHERE id_pesan = '$id_pesan'");
if ($hapus) {
    echo "<script>
        alert('Pesan berhasil dihapus.');
        window.location = 'index.php?halaman=pesan'; // Redirect ke halaman daftar pesan
    </script>";
} else {
    echo "<div class='alert alert-danger'>Pesan gagal dihapus. Silakan coba lagi.</div>";
}
?>