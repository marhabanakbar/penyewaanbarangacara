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
    <title>Sewa Sekarang</title>
    <style>
      body {
        font-family: Helvetica;
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

      .content {
        text-align: center;
        margin-top: 10%;
      }
      .product-card {
        width: 400px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        display: inline-block;
        margin-top: 20px;
      }
      .product-card img {
        width: 100px;
        height: 100px;
        background-color: #ddd;
        display: block;
        margin: 0 auto 10px;
      }
      .duration-buttons .btn {
        width: 90px;
        background-color: #fad4c0;
        border: none;
        margin: 5px;
      }
      .duration-buttons .btn.active {
        background-color: white;
      }
      .order-button {
        background-color: #fad4c0;
        border: none;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
      }

      @media (max-width: 993px) {
        .navbar-collapse {
          background-color: #fcdac5;
        }
        .content {
        text-align: center;
        margin-top: 20%;
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
              <a class="nav-link " href="katalog.php">Belanja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="tentang.php">Tentang</a>
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
                <li><a class="dropdown-item" href="#">Histori Pemesanan</a></li>
                <li><a class="dropdown-item" href="keluar.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="content">
      <h1>Sewa Sekarang</h1>
      <div class="product-card">
        <img
          height="100"
          src="gambar/tenda2.jpeg"
          width="100"
        />
        <h3 class="card-title">Tenda</h3>
      </div>
      <p>
        Sebelum melanjutkan proses pembayaran, silahkan lengkapi durasi sewa
        anda terlebih dahulu.
      </p>
      <h3>Durasi Sewa</h3>
      <div class="duration-buttons">
        <button class="btn" onclick="toggleActive(this)">1 hari</button>
        <button class="btn" onclick="toggleActive(this)">3 hari</button>
        <button class="btn" onclick="toggleActive(this)">7 hari</button>
      </div>
      <div class="d-grid gap-2 col-3 mx-auto">
        <button align="center" class="btn order-button" onclick="submitSewa()">
          Sewa Sekarang
        </button>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function toggleActive(clickedButton) {
        if (clickedButton.classList.contains("active")) {
          clickedButton.classList.remove("active");
        } else {
          const buttons = document.querySelectorAll(".duration-buttons .btn");
          buttons.forEach((button) => button.classList.remove("active"));
          clickedButton.classList.add("active");
        }
      }
      function submitSewa() {
        const activeButton = document.querySelector(
          ".duration-buttons .btn.active"
        );
        if (activeButton) {
          alert("Penyewaan berhasil!");
        } else {
          alert("Pilih durasi sewa terlebih dahulu.");
        }
      }
    </script>
  </body>
</html>
