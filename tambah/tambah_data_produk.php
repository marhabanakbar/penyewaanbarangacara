<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Tambah Produk</b></h5>
</div>

<?php 

$kategori = array();
$ambil = $conn->query("SELECT * FROM data_kategori");
while($pecah = $ambil->fetch_assoc())
{
    $kategori[] = $pecah;
}

?>

<form method="post" enctype="multipart/form-data">
    <div class="card shadow bg-white">
        <div class="card-body">

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Kategori :</label>
            <div class="col-sm-9">
                <select name="id_kategori" class="form-control">
                    <option selected disabled>Pilih Nama Kategori</option>
                    <?php foreach ($kategori as $key => $value): ?>
                    <option value="<?php echo $value['id_kategori']; ?>">
                        <?php echo $value['nama_kategori']; ?>
                    </option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Produk :</label>
            <div class="col-sm-9">
                <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Produk">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Foto Produk :</label>
            <div class="col-sm-9">
                <div class="input-foto">
                <input type="file" name="foto_produk[]" class="form-control" multiple>
                </div>
                <span class="btn btn-sm btn-success mt-3 btn-tambah">
                    <i class="fa fa-camera"></i> Pilih Foto Produk
                </span>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Deskripsi :</label>
            <div class="col-sm-9">
                <textarea type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Harga Produk :</label>
            <div class="col-sm-9">
                <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Produk">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Stock :</label>
            <div class="col-sm-9">
                <input type="text" name="stock" class="form-control" placeholder="Masukkan Stock Produk">
            </div>
        </div>

        <div class="footer">
            <div class="row">
                <div class="col-md-11">
                <button name="simpan" class="btn btn-sm btn-success">Simpan</button>
                </div>
                <div class="col-md-1 text-right">
                    <a href="index.php?halaman=data_produk" class="btn btn-sm btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
if(isset($_POST['simpan']))
{
    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $nama_foto = $_FILES['foto_produk']['name'];
    $lokasi_foto = $_FILES['foto_produk']['tmp_name'];

    move_uploaded_file($lokasi_foto[0], "../assets/foto_produk/" .$nama_foto[0]);
    $conn->query("INSERT INTO data_produk (id_kategori, nama_barang, foto_produk, deskripsi, harga, stock) VALUES ('$id_kategori', '$nama', '$nama_foto[0]', '$deskripsi', '$harga', '$stock')");

    $id_baru = $conn->insert_id;

    foreach ($nama_foto as $key => $tiap_nama) 
    {
        $tiap_lokasi = $lokasi_foto[$key];
        move_uploaded_file($tiap_lokasi, "../assets/foto_produk/" . $tiap_nama);

        $conn->query("INSERT INTO produk_foto (id_produk, nama_produk_foto) VALUES ('$id_baru', '$tiap_nama') ");

    }

    echo "<script>alert('data berhasil disimpan');</script>";
    echo "<script>location = 'index.php?halaman=data_produk'</script>";
}
?>