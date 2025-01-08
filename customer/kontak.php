<?php
require '../koneksi/koneksi.php';
session_start();
if (isset($_POST['submit'])) 
{
  $nama_pengirim = $_POST['nama_pengirim'];
  $email_pengirim = $_POST['email_pengirim'];
  $pesan = $_POST['pesan'];
  $conn->query("INSERT INTO pesan (nama_pengirim, email_pengirim, pesan) VALUES ('$nama_pengirim', '$email_pengirim', '$pesan')");
        echo "<script>alert('pesan terkirim')</script>";
        echo "<script>location.href='kontak.php'</script>";
}
?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <title>Kontak</title>
    <style>
      body {
        font-family: Helvetica;
      }

      .form-control {
        border-radius: 50px;
      }

      .navbar {
        background-color: #ffd7c2;
        height: 80px;
        box-shadow: 0 4px 6px rgba(152, 105, 17, 0.1);
        border-radius: 5px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }

      .navbar-brand {
        font-weight: bold;
      }

      .navbar-nav .nav-link {
        color: rgb(85, 82, 82);
        transition: font-weight 0.2s ease;
        font-weight: bold;
      }

      .navbar-nav .nav-link:hover {
        font-weight: bold;
        color: black;
      }

      .navbar-nav .nav-link.active {
        font-weight: bold;
      }

      .dropdown-menu {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .dropdown-item:hover {
        background-color: #fcdac5;
      }

      /**isi kontak */
      .header {
            text-align: center;
            position: absolute;
            top: 40%;
            right: 67%;
        }
        .header h1 {
            color: black;
            text-align: center;
            font-family: 'noto-serif', sans-serif;
            font-size: 40px;
        }
        .header span {
            color: black;
        }
        .content-header {
            position: absolute;
            transform: translate(-50%, -50%);
            text-align: center;
            top: 55%;
            right: 41.5%;
        }
        .content-header p {
            font-family: 'noto-serif', sans-serif;
            font-size: 16px;
            text-align: left;
            color: black;
        }
        /* CSS untuk form di bagian "Hubungi Kami" */
        .container {
            margin-top: 20%;
            display: flex;
            margin: 100px auto; 
            width: 100%; 
            border: 1px solid #e0e0e0;
            background-color: #ffffff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .left {
            flex: 1;
            padding: 40px;
            background-color: #ffffff;
        }

        .left h1 {
            font-size: 32px;
            color: #000000;
            margin: 0;
        }

        .left p {
            margin-top: 10px;
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }

        .right {
            flex: 1;
            padding: 40px;
            background-color: #f9f9f9;
        }

        form div {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            background-color: #ffffff;
        }

        form textarea {
            resize: none;
            height: 120px;
        }

        button[type="submit"] {
            background-color: #ff7f7f;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #e06666;
        }
        .nav {
            z-index: 10;
        }

        .wrapper {
            position: relative;
            padding-top: 100px; 
        }
        
        form {
            max-width: 100%;
            display: block;
            margin-top: 20px;
        }

      @media (max-width: 768px) {
        .navbar-collapse {
          justify-content: flex-end;
      }

      /* Untuk memastikan search bar tetap berada di tengah */
      .search-container {
        position: absolute;
        left: 60%;
        transform: translateX(-60%);
        width: 50%;
      }
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SEWAQUY</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Search bar berada di tengah -->
        <div class="search-container">
          <form class="d-flex" role="search">
            <input aria-label="Search" class="form-control me-5 mb-3 ms-4"
              placeholder="Search" type="search"/>
          </form>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="katalog.php">Belanja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.php">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">
                <i class="fas fa-shopping-cart"></i>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-user-circle"></i>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
              >
                <li><a class="dropdown-item" href="profil.php">Profil Saya</a></li>
                <li><a class="dropdown-item" href="histori.php">Histori Pemesanan</a></li>
                <li><a class="dropdown-item" href="keluar.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--isi kontak-->
    <div class="container">
            <div class="left">
                <h1>Hubungi Kami</h1>
                <p>Silahkan tinggalkan pesan anda pada kolom yang tersedia</p>
            </div>
            <div class="right">
            <form method="POST">
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama_pengirim" class="form-label">Nama Anda:</label>
                        <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" required>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email_pengirim" class="form-label">E-mail Anda:</label>
                        <input type="text" class="form-control" id="email_pengirim" name="email_pengirim" required>
                    </div>
                    <!-- Pesan -->
                    <div class="mb-3">
                        <label for="pesan">Pesan Anda:</label>
                        <textarea class="form-control" id="pesan" name="pesan" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">KIRIM</button>
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
