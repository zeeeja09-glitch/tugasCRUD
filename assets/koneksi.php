<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_produk";

$dbconnect = new mysqli ("$host", "$user", "$pass", "$db" );

$dbconnect = mysqli_connect("localhost", "root", "", "db_produk");
if (!$dbconnect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>