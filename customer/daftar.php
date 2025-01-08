<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <!-- Menggunakan Bootstrap CSS dari file lokal -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menggunakan FontAwesome dari CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
            display: block;
            margin: 0 auto;
            margin-top: 35px;
        }
        h6.text-center {
            margin-top: 25px;
        }
        .login-container {
            max-width: 750px;
            margin: auto;
        }
        .btn {
            width: 100%;
        }
        hr.tex {
            display: block;
            margin: 20px auto;
            border: 0;
            border-top: 5px solid black;
            width: 60%;
            opacity: 0.8;
        }
        .btn-primary {
            max-width: 450px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
</head>
<body>
    <img src="gambar/logo.jpeg" alt="Avatar" class="avatar">
    <h6 class="text-center">Selamat Datang di SEWAQUY</h6>
    <hr class="tex">
    <div class="container mt-5 login-container">
        <h2 class="mb-4 text-center">Daftar</h2>
        <div id="alert-container"></div>
        <form id="registerForm" method="post" action="register.php">
            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="username" placeholder="Masukkan username"  name="username" required>
                </div>
            </div>
            <!-- Email, Nomor Telepon, dan Alamat -->
            <div class="row">
                <!-- Email -->
                <div class="col-md-4 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email" required>
                    </div>
                </div>
                <!-- Nomor Telepon -->
                <div class="col-md-4 mb-3">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="number" class="form-control" id="phone" placeholder="Masukkan nomor telepon" name="phone" required>
                    </div>
                </div>
                <!-- Alamat -->
                <div class="col-md-4 mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        <textarea class="form-control" id="address" placeholder="Masukkan alamat" name="alamat" rows="1" required></textarea>
                    </div>
                </div>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password"  required>
                </div>
            </div>
            <!-- Konfirmasi Password -->
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Masukkan konfirmasi password" name="konfirmasi" required>
                </div>
            </div>
            <!-- Jarak tambahan antara Konfirmasi Password dan Daftar Button -->
            <div class="mb-3"></div> <!-- Menambahkan jarak -->
            <!-- Daftar Button -->
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-user-plus"></i> Daftar
            </button>
        </form>
    </div>
    <!-- Bootstrap JS dari file lokal -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>


