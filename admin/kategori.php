<div class="shadow p-3 mb-5 bg-white rounded">
    <h5><b>Halaman Kategori</b></h5>
</div>

<?php 

$kategori = array();
$ambil = $conn->query("SELECT * FROM data_kategori");
while ($pecah = $ambil->fetch_assoc())
{
    $kategori[] = $pecah;
}
?>

<a href="index.php?halaman=tambah_data_kategori" class="btn btn-primary">Tambah Data Kategori</a>

<div class="card shadow bg-white">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped" id="tables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kategori as $key => $value): ?>
                <tr>
                    <td width="50"><?php echo $key+1; ?></td>
                    <td><?php echo $value['nama_kategori']; ?></td>
                    <td class="text-center" width="150">
                        <a href="index.php?halaman=hapus_kategori&id=<?php echo $value['id_kategori']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>