<div class="shadow p-3 mb-5 bg-white rounded">
    <h5><b>Halaman Edit Data Produk</b></h5>
</div>

<?php 


$id_produk = $_GET['id'];

$kategori = array();
$ambil = $conn->query("SELECT * FROM data_kategori");
while($pecah = $ambil->fetch_assoc())
{
    $kategori[] = $pecah;
}

$ambil = $conn->query("SELECT * FROM data_produk JOIN data_kategori ON data_produk.id_kategori=data_kategori.id_kategori WHERE id_produk = '$id_produk'");
$edit = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="card shadow bg-white">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Kategori :</label>
                <div class="col-sm-9">
                    <select name="id_kategori" class="form-control">

                        <option value="<?php echo $edit['id_kategori']; ?>">
                            <?php echo $edit['nama_kategori']; ?></option>

                        <?php foreach ($kategori as $key => $value): ?>
                        <option value="<?php echo $value['id_kategori']; ?>">
                            <?php echo $value['nama_kategori']; ?>
                        </option>
                        <?php endforeach ; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Produk :</label>
                <div class="col-sm-9">
                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $edit['nama_barang']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Foto Produk :</label>
                <div class="col-sm-9">
                    <img src="../assets/foto_produk/<?php echo $edit['foto_produk']; ?>" width="150">
                    <input type="file" name="foto_produk[]" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Deskripsi :</label>
                <div class="col-sm-9">
                    <textarea type="text" name="deskripsi" class="form-control"><?php echo $edit['deskripsi']; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Harga Produk :</label>
                <div class="col-sm-9">
                    <input type="text" name="harga" class="form-control" value="<?php echo $edit['harga']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Stock Produk:</label>
                <div class="col-sm-9">
                    <input type="text" name="stock" class="form-control" value="<?php echo $edit['stock']; ?>">
                </div>
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
    $nama = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $namafoto = $_FILES['foto_produk']['name'];
    $lokasifoto = $_FILES['foto_produk']['tmp_name'];
    
    // jika foto produk diubah
    if(!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto[0], '../assets/foto_produk/'.$namafoto[0]);

        $conn->query("UPDATE data_produk SET
        id_kategori = '$id_kategori',
        nama_barang = '$nama',
        foto_produk = '$namafoto[0]',
        deskripsi = '$deskripsi',
        harga = '$harga',
        stock = '$stock'
        WHERE id_produk = '$id_produk'");
    }
    // jika foto produk tidak diubah
    else
    {
        $conn->query("UPDATE data_produk SET
        id_kategori = '$id_kategori',
        nama_barang = '$nama',
        deskripsi = '$deskripsi',
        harga = '$harga',
        stock = '$stock'
        WHERE id_produk = '$id_produk'");
    }

    $namafotoproduk = $_FILES['foto_produk']['name'];
    $lokasifotoproduk = $_FILES['foto_produk']['tmp_name'];

    move_uploaded_file($lokasifotoproduk[0], '../assets/foto_produk/'.$namafotoproduk[0]);
    $conn->query("INSERT INTO produk_foto (id_produk, nama_produk_foto) VALUES ('$id_produk', '$namafotoproduk[0]')");

    echo "<script>alert('data berhasil diedit');</script>";
    echo "<script>location = 'index.php?halaman=data_produk'</script>";
}

?>