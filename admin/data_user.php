<div class="shadow p-3 mb-5 bg-white rounded">
    <h5><b>Halaman Data User</b></h5>
</div>

<?php 

$data_user = array();
$ambil = $conn->query("SELECT * FROM user WHERE role = 2");
while ($pecah = $ambil->fetch_assoc())
{
    $data_user[] = $pecah;
}

?>

<div class="card shadow bg-white">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped" id="tables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No.Telepon</th>
                    <th>Gambar</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_user as $key => $value): ?>
                <tr>
                    <td width="50"><?php echo $key+1; ?></td>
                    <td><?php echo $value['username']; ?></td>
                    <td><?php echo $value['alamat']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td>x</td>
                    <td class="text-center" width="150">
                        <a href="index.php?halaman=hapus_data_user&id=<?php echo $value['id_user']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>