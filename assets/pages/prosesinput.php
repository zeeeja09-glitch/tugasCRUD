<?php
include "../koneksi.php";

$nama_produk = $_POST['nama_produk'];
$stok        = $_POST['stok'];
$nama_admin  = $_POST['nama_admin'];
$harga       = $_POST['harga'];

mysqli_query($dbconnect, "INSERT INTO tb_barang (id_produk, nama_produk, stok, nama_admin, harga) VALUES (NULL, '$nama_produk', '$stok', '$nama_admin', '$harga')");

header('Location: produk.php');
exit();
?>