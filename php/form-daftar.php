
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambahkan Produk Baru | Hayu Dagang</title>
</head>

<body>
<header>
    <h3>Tambah Produk</h3>
</header>

<form action="daftar.php" method="POST" enctype="multipart/form-data">

    <fieldset>

        <p>
            <label for="nama">Nama Produk: </label>
            <input type="text" name="produk" placeholder="nama produk" required="required"  />
        </p>
        <p>
            <label for="harga"> Harga Produk : </label>
            <input required="required" type="number" name="harga" min="1">
        </p>
        <p>
            <label for="kategori">kategori: </label>
            <input type="text" list="kategori" name="kategori" required="required"/>
            <datalist id="kategori">
                <option>hewan</option>
                <option>nabati</option>
            </datalist>

        </p>
        <p>
            <label for="alamat"> Deskripsi Produk : </label>
            <textarea name="deskripsi"></textarea>
        </p>
        <p>
            <input type="file" name="thumbnail">
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>



    </fieldset>

</form>

</body>
</html>
