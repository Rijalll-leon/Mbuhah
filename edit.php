<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Data</h2>
<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">
    Nama: <input type="text" name="nama" value="<?= $d['nama'] ?>"><br>
    Alamat: <input type="text" name="alamat" value="<?= $d['alamat'] ?>"><br>
    <button type="submit">Update</button>
</form>
