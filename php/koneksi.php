<?php


$server = "localhost";
$user = "root";
$password = "";
$nama_database = "gambar";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal Terkoneksi!: " . mysqli_connect_error());
}

?>