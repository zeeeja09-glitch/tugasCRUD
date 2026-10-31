<?php
include "../koneksi.php";

$id          = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$stok        = $_POST['stok'];
$nama_admin  = $_POST['nama_admin'];
$harga       = $_POST['harga'];

mysqli_query($dbconnect, "UPDATE `tb_barang` SET `nama_produk` = '$nama_produk', `stok` = '$stok', `nama_admin` = '$nama_admin', `harga` = '$harga'  WHERE `tb_barang`.`id_produk` = $id;");

header('Location: produk.php');
exit();
?>