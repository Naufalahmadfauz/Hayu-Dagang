<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
        if($_GET['status'] == 'sukses') {
            echo "Pendaftaran siswa baru berhasil!";
        } elseif ($_GET['status'] == 'dihapus') {
            echo "Data Telah Dihapus!";
        }elseif ($_GET['status'] == 'diedit') {
            echo "Data Telah Diedit";
        }
        else {
            echo "Proses Gagal!";
        }
        ?>
    </p>
<?php endif; ?>
