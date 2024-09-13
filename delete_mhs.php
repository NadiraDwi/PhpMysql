<?php
    include "koneksi.php";
    // $kode_prodi = $_POST['kode'];
    // $nama_prodi = $_POST['prodi'];
    $id_prodi = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id_prodi");
    if ($query) {
        echo "<script>";
        echo "alert('Delete Data Berhasil!');";
        echo "window.location.replace('mahasiswa.php')";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Delete Data Gagal!');";
        echo "window.location.replace('mahasiswa.php')";
        echo "</script>";
    }
?>