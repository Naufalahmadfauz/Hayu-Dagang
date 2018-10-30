<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['ubah']))
{

    // ambil data dari formulir
    $nama_produk    = $_POST['produk'];
    $kategori       = $_POST['kategori'];
    $harga_produk   = $_POST['harga'];
    $deskripsi      = $_POST['deskripsi'];
    $id_produk      = $_POST['id_produk'];

    if(isset($_POST['thumbnail']))
    {
        $thumbnail      = $_FILES['thumbnail']['name'];
        $tmp            = $_FILES['thumbnail']['tmp_name'];
        if(is_file("images/".$query['thumbnail']))
        { // Jika foto ada
            unlink("images/".$query['thumbnail']);
        } // Hapus file foto sebelumnya yang ada di folder images
        $sql = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', kategori='$kategori', deskripsi_produk='$deskripsi', thumbnail='$thumbnail' WHERE id_produk=$id_produk";
        $query = mysqli_query($db, $sql);
            if( $query )
            {
                // kalau berhasil alihkan ke halaman list-siswa.php
                header('Location: list-produk.php');
            }    else
                {
                // kalau gagal tampilkan pesan
                die("Gagal menyimpan perubahan...");
                }}
    else
        {

    // buat query update
    $sql = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', kategori='$kategori', deskripsi_produk='$deskripsi', thumbnail='$thumbnail' WHERE id_produk=$id_produk";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query )
    {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-produk.php');
    }
        else
            {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
            }
        }
}

    else {
    die("Akses dilarang...");
}

?>