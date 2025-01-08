<?php
require '../koneksi/koneksi.php';
session_start();

$user_id = $_SESSION['user_id'];
$select = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$user_id' AND role = '2'") or die('Query gagal!');
if(mysqli_num_rows($select) > 0){
   $fetch = mysqli_fetch_assoc($select);
}
?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Profile Setting
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
   <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #fbd1b7;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .header .search-bar {
            display: flex;
            align-items: center;
            flex-grow: 1;
            margin: 0 20px;
            position: relative;
        }
        .header .search-bar input {
            width: 100%;
            padding: 5px 20px 5px 40px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
        .header .search-bar .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .header .nav-links {
            display: flex;
            align-items: center;
        }
        .header .nav-links a {
            margin: 0 10px;
            text-decoration: none;
            color: black;
        }
        .header .profile-menu {
            position: relative;
            margin-left: auto;
            display: flex;
            align-items: center;
        }
        .header .profile-menu .profile-icon,
        .header .profile-menu .cart-icon {
            cursor: pointer;
            margin-left: 15px;
        }
        .header .profile-menu .dropdown {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            z-index: 1;
        }
        .header .profile-menu .dropdown a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
        }
        .header .profile-menu .dropdown a:hover {
            background-color: #f5f5f5;
        }
        .profile-container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .profile-container .profile-pic {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .profile-container .profile-pic img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 1px solid #ccc;
        }
        .profile-container .profile-pic input {
            margin-top: 10px;
        }
        .profile-container .profile-details {
            flex: 2;
            display: flex;
            flex-direction: column;
            padding-left: 20px;
        }
        .profile-container .profile-details .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .profile-container .profile-details .form-group label {
            width: 150px;
            margin-bottom: 0;
        }
        .profile-container .profile-details .form-group input,
        .profile-container .profile-details .form-group select {
            flex: 1;
        }
        .profile-container .profile-details .password-inputs input {
            margin-top: 10px;
            font-style: italic;
        }
        .profile-container .profile-details .save-button {
            margin-top: 20px;
            padding: 10px;
            border: none;
            background-color: #fbd1b7;
            cursor: pointer;
        }
   </style>
  </link>
 </head>
 <body>
  <div class="header">
   <div class="logo">
    SEWAQUY
   </div>
   <div class="search-bar">
    <i class="fas fa-search search-icon">
    </i>
    <input type="text"/>
   </div>
   <div class="nav-links">
    <a href="home.php">Beranda</a>
    <a href="katalog.php">Belanja</a>
    <a href="tentang.php">Tentang</a>
    <a href="kontak.php">Kontak</a>
   </div>
   <div class="profile-menu">
   <a class="nav-link" href="keranjang.php">
      <i class="fas fa-shopping-cart"></i>
    </a>
    <i class="fas fa-user profile-icon">
    </i>
    <div class="dropdown">
     <a href="profil.php">Profile</a>
     <a href="histori.php">Histori Pembelian</a>
     <a href="keluar.php">Sign Out</a>
    </div>
   </div>
  </div>
  <div class="profile-container">
   <form action="update_profile.php" enctype="multipart/form-data" method="POST">
    <div class="profile-details">
     <div class="form-group">
      <label for="username">
       USERNAME
      </label>
      <input class="form-control" id="username" name="username" required="" type="text" value="<?php echo $fetch['username']; ?>"/>
     </div>
     <div class="form-group">
      <label for="email">
       EMAIL
      </label>
      <input class="form-control" id="email" name="email" required="" type="email" value="<?php echo $fetch['email']; ?>"/>
     </div>
     <div class="form-group">
      <label for="phone">
       NO HP
      </label>
      <input class="form-control" id="phone" name="phone" required="" type="tel" value="<?php echo $fetch['phone']; ?>"/>
     </div>
     <div class="form-group">
      <label for="alamat">
       ALAMAT
      </label>
      <input class="form-control" id="alamat" name="alamat" required="" type="text" value="<?php echo $fetch['alamat']; ?>"/>
     </div>
     <div class="password-inputs">
      <input class="form-control" name="current_password" placeholder="Masukkan kata sandi saat ini" type="password">
       <input class="form-control" name="new_password" placeholder="Masukkan kata sandi baru" type="password">
        <input class="form-control" name="confirm_password" placeholder="Masukkan konfirmasi kata sandi" type="password">
        </input>
       </input>
      </input>
     </div>
     <button class="btn btn-block mt-3" style="background-color: #fbd1b7;">
      SIMPAN RINCIAN AKUN
     </button>
    </div>
   </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>
  <script>
   document.querySelector('.profile-icon').addEventListener('click', function() {
            const dropdown = document.querySelector('.profile-menu .dropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });

        document.getElementById('profile-picture').addEventListener('change', function() {
            var reader = new FileReader();
            reader.onload = function () {
                document.getElementById('profile-img').src = reader.result;
            }
            reader.readAsDataURL(this.files[0]);
        });
  </script>
 </body>
</html>
