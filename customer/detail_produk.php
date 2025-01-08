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
    <title>Detail Produk</title>
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
        margin-top: 100px;
      }

      .product-title {
        font-size: 2rem;
        font-weight: bold;
      }

      .product-price {
        font-size: 1.5rem;
        font-weight: bold;
      }

      .product-old-price {
        text-decoration: line-through;
        color: grey;
      }

      .product-stock,
      .product-min-order {
        font-size: 0.9rem;
        color: grey;
      }

      .quantity-control {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .quantity-control button {
        border: 1px solid grey;
        background-color: white;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .quantity-control input {
        width: 50px;
        text-align: center;
      }

      .btn-custom {
        background-color: #f8d7da;
        border: none;
        padding: 10px 20px;
        font-weight: bold;
      }
      .btn-custom-2 {
        background-color: #f8d7da;
        border: none;
        padding: 10px 20px;
        font-weight: bold;
      }

      .description-title {
        font-weight: bold;
        margin-top: 20px;
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

    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img alt="foto barang" class="img-fluid" height="400" src="gambar/tenda2.jpeg" width="400" />
          </div>
          <div class="col-md-6">
            <h1 class="product-title">Tenda</h1>
            <p class="product-price">Rp 120.000</p>
            <p class="product-old-price">Rp 80.000</p>
            <p class="product-stock">STOK: 15 PCS</p>
            <p class="product-min-order">Minimum Pemesanan: 5 Pcs</p>
            <div class="quantity-control">
              <button id="decrease">-</button>
              <input type="text" id="quantity" value="5" readonly />
              <button id="increase">+</button>
            </div>
            <div class="mt-3">
              <button class="btn btn-custom">
                <a class="nav-link" href="keranjang.php">Keranjang</a>
              </button>
              <button class="btn btn-custom-2">
                <a class="nav-link" href="sewa.php">Sewa Sekarang</a>
              </button>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <h2 class="description-title">Deskripsi</h2>
            <p>
            Tenda ini memiliki warna yg cukup menarik perhatian yaitu dengan kombinasi warna ungu dan putih
            </p>
            <p>Pilihan ukuran:</p>
            <ul>
              <li>1.3 = (2×2 meter) 14kg</li>
              <li>2.4 = (2.5×2.5 meter) 16kg</li>
              <li>3.1 = (3×3 meter) 18kg</li>
            </ul>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        const decreaseBtn = document.getElementById('decrease');
        const increaseBtn = document.getElementById('increase');
        const quantityInput = document.getElementById('quantity');
        let quantity = 5;
  
        decreaseBtn.addEventListener('click', () => {
          if (quantity > 5) {
            quantity--;
            quantityInput.value = quantity;
          }
        });
  
        increaseBtn.addEventListener('click', () => {
          quantity++;
          quantityInput.value = quantity;
        });
      </script>
  </body>
</html>
