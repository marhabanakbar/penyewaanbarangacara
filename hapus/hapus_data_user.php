<?php
if (isset($_GET['id'])) {
    $id_user = intval($_GET['id']);
    $checkQuery = $conn->prepare("SELECT role FROM user WHERE id_user = ?");
    $checkQuery->bind_param("i", $id_user);
    $checkQuery->execute();
    $result = $checkQuery->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['role'] == 2) {
            $deleteQuery = $conn->prepare("DELETE FROM user WHERE id_user = ?");
            $deleteQuery->bind_param("i", $id_user);

            if ($deleteQuery->execute()) {
                // Jika berhasil, arahkan kembali ke halaman customer
                echo "<script>alert('data user berhasil dihapus.');</script>";
                echo "<script>location='index.php?halaman=data_user';</script>";
            } else {
                // Jika gagal menghapus
                echo "<script>alert('Terjadi kesalahan saat menghapus data user.');</script>";
                echo "<script>location='index.php?halaman=data_user';</script>";
            }
            $deleteQuery->close();
        } else {
            // Jika role bukan 2
            echo "<script>alert('Akses ditolak! Hanya pelanggan (role = 2) yang dapat dihapus.');</script>";
            echo "<script>location='index.php?halaman=data_user';</script>";
        }
    } else {
        // Jika pengguna dengan ID tersebut tidak ditemukan
        echo "<script>alert('ID tidak ditemukan.');</script>";
        echo "<script>location='index.php?halaman=data_user';</script>";
    }
    $checkQuery->close();
} else {
    // Jika tidak ada parameter ID di URL
    echo "<script>alert('ID tidak ditemukan.');</script>";
    echo "<script>location='index.php?halaman=data_user';</script>";
}
?>