<?php
include "../koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($dbconnect, "DELETE FROM tb_barang WHERE id_produk = '$id'");

if ($query) {
    
    header("Location: produk.php");
    exit();
} else {
    echo "Gagal menghapus data: " . mysqli_error($dbconnect);
}
?>