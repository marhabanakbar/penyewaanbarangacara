<div class="shadow p-3 mb-5 bg-white rounded">
    <h5><b>Halaman Data Produk</b></h5>
</div>

<?php 

$data_produk = array();
$ambil = $conn->query("SELECT * FROM data_produk JOIN data_kategori
   ON data_produk.id_kategori=data_kategori.id_kategori");
while($pecah = $ambil->fetch_assoc())
{
    $data_produk[] = $pecah;
}

?>

<a href="index.php?halaman=tambah_data_produk" class="btn btn-primary">Tambah Data Produk</a>

<div class="card shadow bg-white">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped" id="tables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_produk as $key => $value): ?>
                <tr>
                    <td width="50"><?php echo $key+1; ?></td>
                    <td><?php echo $value['nama_kategori']; ?></td>
                    <td><?php echo $value['nama_barang']; ?></td>
                    <td>
                        <img width = "100px" src="../assets/foto_produk/<?php echo $value['foto_produk'];?>" alt="">
                    </td>
                    <td><?php echo $value['deskripsi']; ?></td>
                    <td><?php echo $value['harga']; ?></td>
                    <td><?php echo $value['stock']; ?></td>
                    <td class="text-center" width="150px">
                        <a href="index.php?halaman=edit_produk&id=<?php echo $value['id_produk']; ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="index.php?halaman=hapus_produk&id=<?php echo $value['id_produk']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>