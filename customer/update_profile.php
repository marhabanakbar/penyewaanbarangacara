<?php
include '../koneksi/koneksi.php';
session_start();

$user_id = $_SESSION['user_id'];
$current_password = trim($_POST['current_password']);
$new_password = trim($_POST['new_password']);
$confirm_password = trim($_POST['confirm_password']); 

// Pseudocode:
// 1. Function changePassword(username, oldPassword, newPassword):
//    a. Get user record from database by username
//    b. If user not found, return "User not found"
//    c. Verify old password
//    d. If old password is correct, update password to newPassword
//    e. If old password is incorrect, return "Invalid old password"

// Ensure new password matches confirmation
if ($new_password !== $confirm_password) {
    echo "<script>alert('Password baru tidak cocok!'); window.location.href = 'profil.php';</script>";
    exit;
}

$sql = "SELECT password FROM user WHERE id_user = '$user_id' AND role = '2'";  
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $db_password = $data['password'];

    // Verify if the current password matches the stored one (plain text comparison)
    if ($current_password === $db_password) {
        // Update the password directly without hashing
        $update_sql = "UPDATE user SET password = '$new_password' WHERE id_user = '$user_id' AND role = '2'";

        if (mysqli_query($conn, $update_sql)) {
            echo "<script>alert('Password berhasil diubah!'); window.location.href = 'profil.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah password.'); window.location.href = 'profil.php';</script>";
        }
    } else {
        echo "<script>alert('Password lama salah!'); window.location.href = 'profil.php';</script>";
    }
} else {
    echo "<script>alert('Data pengguna tidak ditemukan!'); window.location.href = 'profil.php';</script>";
}

// Menangani unggahan foto profil
if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
    $target_dir = "uploads";
    $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file adalah gambar
    $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
    if ($check !== false) {
        // Batasi jenis file (hanya JPG, JPEG, PNG, GIF yang diizinkan)
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "<script>alert('Hanya file JPG, JPEG, PNG & GIF yang diizinkan.'); window.location.href = 'profil.php';</script>";
            exit;
        }

        // Pindahkan file ke direktori target
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            // Update database dengan nama file baru
            $update_img_sql = "UPDATE user SET profile_picture = '$target_file' WHERE id_user = '$user_id' AND role = '2'";
            if (mysqli_query($conn, $update_img_sql)) {
                echo "<script>alert('Foto profil berhasil diubah!'); window.location.href = 'profil.php';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan foto profil.'); window.location.href = 'profil.php';</script>";
            }
        } else {
            echo "<script>alert('Terjadi kesalahan saat mengunggah file.'); window.location.href = 'profil.php';</script>";
        }
    } else {
        echo "<script>alert('File bukan gambar.'); window.location.href = 'profil.php';</script>";
    }
}

mysqli_close($conn);
?>
