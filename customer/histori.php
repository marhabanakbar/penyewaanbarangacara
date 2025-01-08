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
    <title>Histori</title>
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

      .container {
            margin-top: 8%;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        table th {
            background-color: #fbd1b7;
        }
        table tr:last-child td {
            border-bottom: none;
        }
        .options {
            display: flex;
            gap: 10px;
        }
        .options button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .options .view-btn {
            background-color: #4CAF50;
            color: white;
        }
        .options .delete-btn {
            background-color: #f44336;
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
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <form class="d-flex ms-3 search-container" role="search">
            <input
              aria-label="Search"
              class="form-control me-5"
              placeholder="Search"
              type="search"/>
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="profil.php">Profil Saya</a></li>
                <li><a class="dropdown-item" href="histori.php">Histori Pemesanan</a></li>
                <li><a class="dropdown-item" href="keluar.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <div class="container">
      <h1>Histori Pemesanan</h1>
      <table>
          <thead>
              <tr>
                  <th>ID Pesanan</th>
                  <th>Nama Barang</th>
                  <th>Tanggal Sewa</th>
                  <th>Tanggal Selesai</th>
                  <th>Biaya</th>
                  <th>Total Biaya</th>
                  <th>Status</th>
                  <th>Opsi</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>001</td>
                  <td>Tenda 1</td>
                  <td>01-01-2023</td>
                  <td>05-01-2023</td>
                  <td>Rp. 100.000</td>
                  <td>Rp. 500.000</td>
                  <td>Selesai</td>
                  <td class="options">
                      <button class="view-btn">Lihat</button>
                      <button class="delete-btn">Hapus</button>
                  </td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Tenda 2</td>
                  <td>02-01-2023</td>
                  <td>06-01-2023</td>
                  <td>Rp. 200.000</td>
                  <td>Rp. 1.200.000</td>
                  <td>Selesai</td>
                  <td class="options">
                      <button class="view-btn">Lihat</button>
                      <button class="delete-btn">Hapus</button>
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
  <script>
      function toggleProfileMenu() {
          const profileMenu = document.getElementById('profileMenu');
          profileMenu.style.display = profileMenu.style.display === 'block' ? 'none' : 'block';
      }
  </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
