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
    <title>Tentang</title>
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

      .profile-container {
            display: flex;
            padding: 20px;
            margin-top: 90px;
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
        .profile-container .profile-pic button {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #f5f5f5;
            cursor: pointer;
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

        
      .h3{
        padding-top: 100px;
        font-family: Helvetica;
        font-size: 30px;
        font-weight: bold;
        text-align: center;
      }

        .container{
            align-items: enter;
            display: flex;
        }

        p{
            margin-left: 30px;
            margin-right: 30px;
            text-align: justify;
        }

        img{
            background-repeat: no-repeat;
            max-width: 40%;
            margin-left: 30px;
            align-items: left;
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
                <li><a class="dropdown-item" href="histori.php">Histori Pemesanan</a></li>
                <li><a class="dropdown-item" href="keluar.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="tentang">
        <div class="list-item">
            <h3 class="h3">Tentang Kami</h3>
            <div class="container">
                
                <!------------GANTI GAMBAR DISINI---------->
                <img src="gambar/bg.jpg" alt=""> 
                <!--NI-->

                    <p>Selamat datang di SEWAQUY!  <br><br>
                    Kami adalah penyedia layanan penyewaan perlengkapan acara terpercaya yang berdedikasi untuk 
                    membantu mewujudkan acara Anda menjadi momen yang tak terlupakan. Dengan beragam pilihan 
                    perlengkapan berkualitas tinggi, kami siap mendukung berbagai jenis acara, mulai dari pernikahan, 
                    pesta ulang tahun, dan juga acara lainnya. <br><br>
                    Percayakan kebutuhan perlengkapan acara Anda kepada kami, dan biarkan kami membantu menciptakan 
                    momen yang berkesan dan sempurna!
                    </p>
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
