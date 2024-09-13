<?php
    include "koneksi.php";
    $npm = $_POST['NPM'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $smstr = $_POST['semester'];
    $prodi = $_POST['prodi'];
    $jk = $_POST['JK'];
    $id = $_POST['id'];

    $rand = rand();
    $ekstensi = array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi)){
        echo "<script>";
        echo "alert('Gagal Ekstensi!!!!');";
        echo "window.location.replace('mahasiswa.php')";
        echo "</script>";
    }if(!$filename){
        $query = "UPDATE mahasiswa SET npm='$npm', nama='$nama', kelas='$kelas', semester='$smstr', kd_prodi='$prodi', jenis_kelamin='$jk', foto_profil='' WHERE id=$id";
    }else{
        if($ukuran < 1044070){
            $xx = $rand.'.'.$ext;
            move_uploaded_file($_FILES['foto']['tmp_name'],'gambar/'.$rand.'.'.$ext);
            $query = "UPDATE mahasiswa SET npm='$npm', nama='$nama', kelas='$kelas', semester='$smstr', kd_prodi='$prodi', jenis_kelamin='$jk', foto_profil='$xx' WHERE id=$id";
        }else{
            echo "<script>";
            echo "alert('Gagal ukuran file!!!');";
            echo "window.location.replace('mahasiswa.php')";
            echo "</script>";
        }
    }

    $query = mysqli_query($koneksi, $query);
    if ($query) {
        echo "<script>";
        echo "alert('Update Data Berhasil!');";
        echo "window.location.replace('mahasiswa.php')";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Update Data Gagal!');";
        echo "window.location.replace('mahasiswa.php')";
        echo "</script>";
    }
?>