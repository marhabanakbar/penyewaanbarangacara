<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="admin.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <title>ADMINISTRATOR</title>
 <style>
 .nav-link:hover {
 background-color: gold;
 color: white !important;
 }
 </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" arialabel="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-auto d-flex align-items-center">
              <div class="icon">
                    <i class="fas fa-envelope-square me-3"></i>
                    <i class="fas fa-bell-slash me-3"></i>
                    <i class="fas fa-user-circle me-3"></i> <!-- Profil User Icon -->
                </div>
             </div>
         </div>
    </div>
 </nav>
 <div class="row g-0 mt-5">
 <!-- Sidebar -->
 <div class="col-md-2 bg-info mt-2 pt-4">
      <ul class="nav flex-column ms-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="data_user.php"><i class="fas fa-users me-2"></i>Data User</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="data_barang.php"><i class="fas fa-box me-2"></i>Data Barang</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pesan.php"><i class="fas fa-envelope me-2"></i>Pesan</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="transaksi.php"><i class="fas fa-users me-2"></i>Transaksi</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a><hr class="bg-secondary">
        </li>
      </ul>
    </div>
    
  <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-box me-2"></i> Data Barang</h3><hr>
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addModal">
    <i class="fas fa-plus-circle me-2"></i>TAMBAH DATA BARANG
  </button>
  <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID BARANG</th>
            <th>NAMA BARANG</th>
            <th>GAMBAR</th>
            <th>DESKRIPSI</th>
            <th>STOCK</th>
            <th>AKSI</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM data_barang");
            while ($data = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?= $data['id_barang']; ?></td>
                    <td><?= $data['nama_barang']; ?></td>
                    <td><img src="asset/<?= $data['gambar']; ?>" alt="Gambar" width="100"></td>
                    <td><?= $data['deskripsi']; ?></td>
                    <td><?= $data['stock']; ?></td>
                    <td>
                        <button class="btn btn-warning btn-edit"
                                data-id_barang="<?= $data['id_barang']; ?>"    
                                data-nama_barang="<?= $data['nama_barang']; ?>"
                                data-gambar="<?= $data['gambar']; ?>"
                                data-deskripsi="<?= $data['deskripsi']; ?>"
                                data-stock="<?= $data['stock']; ?>">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <a href="hapus_barang.php?id_barang=<?= $data['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i>Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
 </div>

 <!-- Modal Tambah Data -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="tambah_barang.php" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">Id Barang</label>
                        <input type="text" class="form-control" id="id_barang" name="id_barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
  <!-- Modal Edit Data -->
   <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="true">
    <div class="modal-dialog">
        <form method="POST" action="ubah_barang.php" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="editId_barang" name="id_barang">
                    <div class="mb-3">
                        <label for="editNama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="editNama_barang" name="nama_barang" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar Saat Ini</label><br>
                        <img id="editGambarPreview" src="" alt="Gambar" width="150" class="mb-3 border rounded"><br>
                        <label for="editFoto" class="form-label">Ganti Foto</label>
                        <input type="file" class="form-control" id="editGambar" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="editDeskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="editDeskripsi" name="deskripsi" required>
                    </div>
                    <div class="mb-3">
                        <label for="editStock" class="form-label">Stock</label>
                        <textarea class="form-control" id="editStock" name="stock" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
   </div>
   <script>
    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function () {
            // Isi data ke modal
            document.getElementById('editId_barang').value = this.dataset.id_barang;
            document.getElementById('editNama_barang').value = this.dataset.nama_barang;
            document.getElementById('editDeskripsi').value = this.dataset.deskripsi;
            document.getElementById('editStock').value = this.dataset.stock;
            // Preview Gambar
            const gambarPath = this.dataset.gambar ? 'asset/' + this.dataset.gambar : '';
            const gambarPreview = document.getElementById('editGambarPreview');
            gambarPreview.src = gambarPath;
            gambarPreview.style.display = gambarPath ? 'block' : 'none';
            // Tampilkan Modal
            new bootstrap.Modal(document.getElementById('editModal')).show();
        });
    });
    </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
