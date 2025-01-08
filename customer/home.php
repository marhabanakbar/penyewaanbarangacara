<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Anda harus login terlebih dahulu'); window.location.href='../customer/masuk.php';</script>";
    exit;
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
    <title>Home</title>
    <style>
      body {
        font-family: Helvetica;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        background-image: url(gambar/bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        display: block;
      }

      .form-control {
        border-radius: 50px;
      }

      .navbar-toggler {
        font-size: 15px;
      }

      .d-flex {
        position: block;
      }
      .navbar {
        background-color: #ffd7c2;
        box-shadow: 0 4px 6px rgba(152, 105, 17, 0.1);
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        padding: 20px;
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

      .search-container {
        width: 100%;
      }

      .header {
        text-align: center;
        position: absolute;
        top: 40%;
        right: 67%;
        transform: translate(-50%, -50%);
      }
      .header h1 {
        color: white;
        text-align: center;
        font-family: "noto-serif", sans-serif;
        font-size: 50px;
      }
      .header span {
        color: white;
      }
      .content-header {
        position: absolute;
        transform: translate(-50%, -50%);
        text-align: center;
        top: 55%;
        right: 41.5%;
      }
      .content-header p {
        color: #ffdaa4;
        font-family: "noto-serif", sans-serif;
        font-size: 16px;
        text-align: left;
        color: white;
      }

      @media (max-width: 993px) {
        .navbar-collapse {
          background-color: #fcdac5;
        }

        .d-flex {
          position: block;
        }
        .search-container {
          position: absolute;
          left: 65%;
          transform: translateX(-70%);
          width: 50%;
        }
      }

      @media (max-width: 450px) {
        .navbar-collapse {
          background-color: #fcdac5;
        }

        .d-flex {
          position: block;
        }
        .search-container {
          position: absolute;
          left: 65%;
          transform: translateX(-70%);
          width: 35%;
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

        <form class="d-flex ms-3 search-container" role="search">
          <input
            aria-label="Search"
            class="form-control me-5"
            placeholder="Search"
            type="search"
          />
        </form>

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

    <!--isi-->
    <div class="header">
      <h1><span>Sewa</span>Quy</h1>
    </div>
    <div class="content-header">
      <p>Aplikasi berbasis web yang berisi perlengkapan barang acara.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
