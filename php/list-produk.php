<?php include("../php/koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produk | Hayu Dagang</title>
    <link rel="icon" href="../media/sawah.jpg">
</head>

<body>
<header>
    <h3>List Produk</h3>
</header>

<nav>
    <a href="form-daftar.php">[+] Tambah Baru</a>
</nav>
<br>
<table border="1">
    <thead>
    <tr>
        <th>No</th>
        <th>Lapak</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Thumbnail</th>

    </tr>
    </thead>
    <tbody>

<?php
    $sql = "SELECT thumbnail, id_produk, nama_produk, harga_produk, kategori, deskripsi_produk, nama_lapak from produk LEFT JOIN lapak on produk.id_lapak = lapak.id_lapaks;";
    $query = mysqli_query($db, $sql);
    $nomer = 0;
    while($produk = mysqli_fetch_array($query)){
        echo "<tr>";
        $nomer++;

        echo "<td>".$produk['id_produk']."</td>";
        echo "<td>".$produk['nama_lapak']."</td>";
        echo "<td>".$produk['nama_produk']."</td>";
        echo "<td>".$produk['harga_produk']."</td>";
        echo "<td>".$produk['kategori']."</td>";
        echo "<td>".$produk['deskripsi_produk']."</td>";
        echo "<td>".$produk['thumbnail']."</td>";


        echo "<td>";
        echo "<a href='form-edit.php?id=".$produk['id_produk']."'>Edit</a> | ";
        echo "<a href='hapus.php?id=".$produk['id_produk']."'>Hapus</a>";
        echo "</td>";

    echo "</tr>";

    }
    ?>

    </tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>