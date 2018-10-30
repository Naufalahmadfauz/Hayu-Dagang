<?php
	include ("koneksi.php");
	if (isset($_POST["kirim"])) {
		$jumlah = count($_FILES['gambar']['name']);
		if ($jumlah > 0) {
			for ($i=0; $i < $jumlah; $i++) {
				$file_name = $_FILES['gambar']['name'][$i];
				$tmp_name = $_FILES['gambar']['tmp_name'][$i];
//				move_uploaded_file($tmp_name, "/media/naufal/Installer".$file_name);
				mysqli_query($db,"INSERT INTO gambars VALUES(NULL,'$file_name')");
			}
			echo "Berhasil Upload";
		}
		else{
			echo "Gambar tidak ada";
		}
	}
?>


<html>
	<head></head>
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="file" name="gambar[]" multiple>
			<br>
			<input type="submit" name="kirim" value="kirim">
		</form>
	</body>
</html>