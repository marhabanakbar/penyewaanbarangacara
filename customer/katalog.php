<?php 

include '../koneksi/koneksi.php';

$produk = array();

$ambil = $conn->query("SELECT * FROM data_produk JOIN data_kategori
  ON data_produk.id_kategori = data_kategori.id_kategori LIMIT 9");

while($pecah = $ambil->fetch_assoc())
{
  $produk[] = $pecah;
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
    <title>Katalog</title>
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

      /**content */
      .center-text {
        text-align: center;
        margin-top: 8%;
        margin-bottom: 10px;
        position: block;
        font-weight: bold;
      }

      .sec {
        padding: 10px 5%;
        display: flex;
        flex-direction: column;
        max-height: 60vh;
        overflow-y: auto; /* Membuat scroll vertikal */
      }

      .products .card {
        background: #f5f5f5;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        padding: 15px;
        text-align: center; /* Memastikan konten berada di tengah */
        transition: transform 0.3s;
      }

      .products .card img {
        height: 250px;
        width: auto;
        margin-bottom: 10px;
      }


      .products .card .title {
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 10px;
      }

      .products .card .box {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
      }

      .products .card .box .price {
        color: #f63e4e;
        font-size: 20px;
        font-weight: bold;
      }

      .products .card .box .btn {
        font-size: 13px;
        color: #f63e4e;
        margin: 3px;
        padding: 10px 15px;
        font-weight: 900;
        border: 1px solid #f63e4e;
        border-radius: 20px;
      }

      .products .card .box .btn:hover {
        cursor: pointer;
        background-color: #f63e4e;
        color: white;
      }

      .products {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* Membuat 4 kolom */
        gap: 20px; /* Jarak antar elemen */
      }


      @media (max-width: 1199px) and (min-width: 768px) {
        .center-text {
          margin-top: 13%;
        }

        /* Untuk memastikan search bar tetap berada di tengah */
        .search-container {
          position: absolute;
          left: 60%;
          transform: translateX(-60%);
          width: 50%;
        }

        .products {
          grid-template-columns: repeat(2, 1fr); /* tablet */
        }

        .products .card img {
          height: 320px;
          width: 320px;
        }

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

      @media (max-width: 768px) {
        /**untuk mobile */
        .center-text {
          text-align: center;
          margin-top: 18%;
          margin-bottom: 10px;
          position: block;
          font-weight: bold;
        }

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

        /* Untuk memastikan search bar tetap berada di tengah */
        .search-container {
          position: absolute;
          left: 60%;
          transform: translateX(-60%);
          width: 50%;
        }

        .products .card img {
          height: 420px;
          width: 420px;
        }

        .products {
          grid-template-columns: repeat(
            1,
            1fr
          ); /* Menjadi 1 kolom untuk mobile */
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

    <!-- Content -->
    <div class="center-text">
      <h2 class="h2 fw-bold">New Product</h2>
    </div>

    <section class="sec">

  <div class="products">

    <?php foreach ($produk as $key => $value): ?>
      <div class="card">
        <img src="../assets/foto_produk/<?php echo $value['foto_produk']; ?>" alt="<?php echo $value['nama_barang']; ?>">
        <div class="title"><?php echo $value['nama_barang']; ?></div>
        <div class="box">
          <div class="price"><?php echo number_format($value['harga']); ?></div>
          <a href="detail_produk.php"><button class="btn">Info</button></a>
          <a href="sewa.php"><button class="btn">Sewa Sekarang</button></a>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
