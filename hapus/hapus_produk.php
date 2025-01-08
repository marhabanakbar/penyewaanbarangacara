<?php 

$id_produk = $_GET['id'];

$ambil = $conn->query("SELECT * FROM data_produk WHERE id_produk = '$id_produk'");
$pecah = $ambil->fetch_assoc();

$hapus_foto = $pecah['foto_produk'];
if(file_exists("../assets/foto_produk/".$hapus_foto));
{
    unlink("../assets/foto_produk/".$hapus_foto);
}

$conn->query("DELETE FROM data_produk WHERE id_produk = '$id_produk'");

$hapusprodukfoto = array();
$ambil = $conn->query("SELECT * FROM produk_foto WHERE id_produk = '$id_produk'");
while($hapus = $ambil->fetch_assoc())
{
    $hapusprodukfoto[] = $hapus;
}
foreach ($hapusprodukfoto as $key => $value) {

    $hapusfoto = $value['nama_produk_data'];

    if(file_exists("../assets/foto_produk/".$hapusfoto))
    {
        unlink("../assets/foto_produk/".$hapusfoto);
    }

    $conn->query("DELETE FROM produk_foto WHERE id_produk = '$id_produk'");

}

echo "<script>alert('data berhasil dihapus');</script>";
echo "<script>location = 'index.php?halaman=data_produk'</script>";


?>