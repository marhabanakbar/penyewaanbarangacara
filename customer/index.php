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
    <title>Index</title>
    <style>
      body {
        font-family: Helvetica;
      }

      .form-control {
        border-radius: 50px;
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
        text-align: center;
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
            font-weight: bold;
        }

        .left p {
            margin-top: 10px;
            color: #666;
            font-size: 16px;
            line-height: 1.5;
            margin-top: 40px;
        }

        .right {
            flex: 1;
            padding: 40px;
            background-color: #f9f9f9;
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
            margin-top: 40px;
        }

        button[type="submit"]:hover {
            background-color: #e06666;
        }

        img {
          width: 100%;
          height: 100%;
        }


      

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SEWAQUY</a>
      </div>
    </nav>

     <!--isi kontak-->
     <div class="container">
      <div class="left">
          <h1>Sewa Alat Pesta Terbaik Untuk Segala Acara</h1>
          <p>Menyediakan segala kebutuhan pesta Anda dengan layanan profesional dan harga terjangkau</p>
          <a href="masuk.php">
            <button type="submit">MASUK SEKARANG</button>
          </a>
      </div>
      <div class="right">
          <img src="gambar/bgcuy.jpg" alt="">
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
