<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_Afrizal");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
