<?php
    include "koneksi.php";
    // $kode_prodi = $_POST['kode'];
    // $nama_prodi = $_POST['prodi'];
    $id_prodi = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM prodi WHERE id_prodi=$id_prodi");
    if ($query) {
        echo "<script>";
        echo "alert('Delete Prodi Berhasil!');";
        echo "window.location.replace('nadira_datatable/index.php')";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Delete Prodi Gagal!');";
        echo "window.location.replace('nadira_datatable/index.php')";
        echo "</script>";
    }
?>