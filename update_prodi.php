<?php
    include "koneksi.php";
    $kode_prodi = $_POST['kode'];
    $nama_prodi = $_POST['prodi'];
    $id_prodi = $_POST['id'];

    $query = mysqli_query($koneksi, "UPDATE prodi SET kd_prodi='$kode_prodi', nama_prodi='$nama_prodi'
                        WHERE id_prodi=$id_prodi");
    if ($query) {
        echo "<script>";
        echo "alert('Update Prodi Berhasil!');";
        echo "window.location.replace('nadira_datatable/index.php')";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Update Prodi Gagal!');";
        echo "window.location.replace('nadira_datatable/index.php')";
        echo "</script>";
    }
?>