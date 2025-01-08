<div class="shadow p-3 mb-5 bg-white rounded">
    <h5><b>Halaman Pesan</b></h5>
</div>

<?php 

$pesan = array();
$ambil = $conn->query("SELECT * FROM pesan");
while ($pecah = $ambil->fetch_assoc())
{
    $pesan[] = $pecah;
} 
?>

<div class="card shadow bg-white">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped" id="tables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pesan as $key => $value): ?>
                <tr>
                    <td width="50"><?php echo $key+1; ?></td>
                    <td><?php echo $value['nama_pengirim']; ?></td>
                    <td><?php echo $value['email_pengirim']; ?></td>
                    <td><?php echo $value['pesan']; ?></td>
                    <td class="text-center" width="150">
                        <a href="index.php?halaman=hapus_pesan&id=<?php echo $value['id_pesan']; ?>"
                        class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>