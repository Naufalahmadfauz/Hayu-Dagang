<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-produk.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id_produk=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit | Hayu Dagang</title>
</head>

<body>
<header>
    <h3>Edit Produk</h3>
</header>

<form action="edit.php" method="POST" enctype="multipart/form-data">

    <fieldset>

        <input type="hidden" name="id_produk" value="<?php echo $produk['id_produk'] ?>" />
        <p>
            <label for="nama">Nama Produk: </label>
            <input name="produk" placeholder="nama produk" type="text" value="<?php echo $produk['nama_produk']?>"/>
        </p>
        <p>
            <label for="harga"> Harga Produk : </label>
            <input required="required" type="number" name="harga" min="1" value="<?php echo $produk['harga_produk']?>">





        <p>
            <label for="kategori">kategori: </label>
            <?php $kategori = $produk['kategori']; ?>
            <select name="kategori">
                <option <?php echo ($kategori == 'hewan') ? "selected": "" ?>>hewan</option>
                <option <?php echo ($kategori == 'nabati') ? "selected": "" ?>>nabati</option>


            </select>
<!--            <input type="text" list="kategori" name="kategori" required="required"/>-->


<!--            <datalist id="kategori">-->
<!--                <option --><?php //echo ($kategori == 'hewan') ? "selected": "" ?><!--
>hewan</option>-->
<!--                <option --><?php //echo ($kategori == 'nabati') ? "selected": "" ?><!--
>nabati</option>-->
<!--            </datalist>-->

        </p>




        <p>
            <label for="alamat"> Deskripsi Produk : </label>
            <textarea value="<?php echo $produk['deskripsi_produk']?>" name="deskripsi"></textarea>
        </p>
        <p>
            <input type="file" name="thumbnail">
        </p>
        <p>
            <input type="submit" value="Ubah" name="ubah" />
        </p>

    </fieldset>


</form>

</body>
</html>