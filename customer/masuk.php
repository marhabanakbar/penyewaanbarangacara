<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h2 class="mb-4 text-center">Masuk</h2>
        <div id="alert-container"></div>
        <form id="loginForm" method="post" action="login.php">
            <!-- Usename -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" required>
                </div>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" required>
                </div>
            </div>
            <!-- Checkbox -->
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Ingat Saya</label>
            </div>
            <!-- Login -->
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>
        <p class="text-center mt-4">Belum punya akun? <a href="daftar.php" class="link-primary">Daftar Sekarang</a></p>
    </div>
    <!-- Bootstrap JS dari file lokal -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>


