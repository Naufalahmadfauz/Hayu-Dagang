<?php
include ("koneksi.php");

if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $nama_produk    = $_POST['produk'];
    $kategori       = $_POST['kategori'];
    $harga_produk   = $_POST['harga'];
    $deskripsi      = $_POST['deskripsi'];
    $thumbnail      = $_FILES['thumbnail']['name'];
    $tmp            = $_FILES['thumbnail']['tmp_name'];

//    $path           = '/home/naufal/Public'.$thumbnail;


//    $id_lapak       = rand(1,100);
//    $jumlah         = count($_FILES['gambar']['name']);

    //gambar multi
//    if ($jumlah > 0)
//    {
//			for ($i=0; $i < $jumlah; $i++)
//			{
//				$file_name = $_FILES['gambar']['name'][$i];
//				$tmp_name = $_FILES['gambar']['tmp_name'][$i];
//                $sql2 = "INSERT INTO gambar VALUES (NULL ,'$file_name')";
//                $query2 = mysqli_query($db,$sql2);
//            }
//    }

    // buat query

    $sql = "INSERT INTO produk (id_produk,id_lapak,nama_produk,harga_produk,kategori,deskripsi_produk,thumbnail) VALUES (NULL ,'200','$nama_produk','$harga_produk', '$kategori', '$deskripsi', '$thumbnail' )";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: awal.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: awal.php?status=gagal');
    }



} else {
    die("Akses dilarang...");
}

?>
?>