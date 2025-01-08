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
    <title>Keranjang</title>
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

      /*isi konten*/
      .cart-container {
        padding: 20px;
        padding-top: 10%;
      }
      .cart-container h1 {
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: bold;
      }
      .cart-items {
        display: flex;
        flex-direction: column;
        gap: 20px;
      }
      .cart-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: white;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      .cart-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 5px;
      }
      .cart-item .item-info {
        flex-grow: 1;
        margin-left: 10px;
      }
      .cart-item .item-info .item-name {
        font-weight: bold;
      }
      .cart-item .item-info .item-price {
        color: #333;
      }
      .cart-item .remove-btn {
        font-size: 20px;
        cursor: pointer;
      }
      .cart-summary {
        margin-top: 20px;
        padding: 20px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      .cart-summary .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
      }
      .cart-summary .summary-item:last-child {
        font-weight: bold;
      }
      .checkout-btn {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #fbd1b7;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        text-align: center;
        margin-top: 20px;
      }
      .cart-item .quantity-control {
        display: flex;
        align-items: center;
      }
      .cart-item .quantity-control button {
        background-color: #fbd1b7;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        font-size: 16px;
      }
      .cart-item .quantity-control input {
        width: 40px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 0 5px;
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
                <li><a class="dropdown-item" href="histori.php">Histori Pembelian</a></li>
                <li><a class="dropdown-item" href="keluar.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--isi konten-->
    <div class="cart-container">
      <h1>Keranjang Belanja</h1>
      <div class="cart-items">
        <div class="cart-item" data-price="100000">
          <img
            alt="Placeholder image for Tenda 1"
            src="https://storage.googleapis.com/a1aa/image/o1okTRM8kbZNDx937zzUfFoydX0cXP4srG1LYfnHWAPxDyfnA.jpg"
          />
          <div class="item-info">
            <div class="item-name">Tenda 1</div>
            <div class="item-price">Rp. 100.000</div>
            <div class="quantity-control">
              <button onclick="decreaseQuantity(this)">-</button>
              <input type="text" value="1" readonly />
              <button onclick="increaseQuantity(this)">+</button>
            </div>
          </div>
          <span class="remove-btn" onclick="removeItem(this)">&times;</span>
        </div>
        <div class="cart-item" data-price="200000">
          <img
            alt="Placeholder image for Tenda 2"
            src="https://storage.googleapis.com/a1aa/image/hZzggt0Eul6BOljxhjNVtFUTKfuRJJV3IbxoEOrT3W95B5fTA.jpg"
          />
          <div class="item-info">
            <div class="item-name">Tenda 2</div>
            <div class="item-price">Rp. 200.000</div>
            <div class="quantity-control">
              <button onclick="decreaseQuantity(this)">-</button>
              <input type="text" value="1" readonly />
              <button onclick="increaseQuantity(this)">+</button>
            </div>
          </div>
          <span class="remove-btn" onclick="removeItem(this)">&times;</span>
        </div>
      </div>
      <div class="cart-summary">
        <div class="summary-item">
          <span>Subtotal</span>
          <span id="subtotal">Rp. 300.000</span>
        </div>
        <div class="summary-item">
          <span>Total</span>
          <span id="total">Rp. 300.000</span>
        </div>
      </div>
      <button class="checkout-btn">Checkout</button>
    </div>

    <script>
      function updateTotals() {
        const cartItems = document.querySelectorAll(".cart-item");
        let subtotal = 0;
        cartItems.forEach((item) => {
          const price = parseInt(item.getAttribute("data-price"));
          const quantity = parseInt(
            item.querySelector(".quantity-control input").value
          );
          subtotal += price * quantity;
        });
        document.getElementById(
          "subtotal"
        ).innerText = `Rp. ${subtotal.toLocaleString()}`;
        const total = subtotal;
        document.getElementById(
          "total"
        ).innerText = `Rp. ${total.toLocaleString()}`;
      }

      function increaseQuantity(button) {
        const input = button.previousElementSibling;
        input.value = parseInt(input.value) + 1;
        updateTotals();
      }

      function decreaseQuantity(button) {
        const input = button.nextElementSibling;
        if (parseInt(input.value) > 1) {
          input.value = parseInt(input.value) - 1;
          updateTotals();
        }
      }

      function removeItem(button) {
        const cartItem = button.parentElement;
        cartItem.remove();
        updateTotals();
      }

      // Initial calculation
      updateTotals();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
