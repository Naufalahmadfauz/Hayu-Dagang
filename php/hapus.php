<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM produk WHERE id_produk=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: awal.php?status=dihapus');
    } else {
        header('Location: awal.php?status=gagal');
    }

} else {
    die("akses dilarang...");
}

?>