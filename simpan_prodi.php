<?php
    include "koneksi.php";
    $kode_prodi = $_POST['kode'];
    $nama_prodi = $_POST['prodi'];

    $query = mysqli_query($koneksi, "INSERT INTO prodi VALUES (null, '$kode_prodi', '$nama_prodi')");
    if ($query) {
        echo "<script>";
        echo "alert('Simpan Prodi Berhasil!');";
        echo "window.location.replace('prodi.php')";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Simpan Prodi Gagal!');";
        echo "window.location.replace('prodi.php')";
        echo "</script>";
    }
    
?>