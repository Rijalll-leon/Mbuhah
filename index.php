<?php include 'koneksi.php'; ?>

<h2>Tambah Data</h2>
<form method="POST" action="tambah.php">
    Nama: <input type="text" name="nama"><br>
    Alamat: <input type="text" name="alamat"><br>
    <button type="submit">Simpan</button>
</form>

<h2>Data Siswa</h2>
<table border="1">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM siswa");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['alamat'] ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
