<?php
require_once 'koneksi.php';

if ($_GET['action']== "table_data") {

    $query = $mysqli->query("select * from prodi");
    $jml =  $query->num_rows;
    $nomer = 1;

        while($data=$query->fetch_array()){
            $array[] = array($nomer,$data['nama_prodi'],$data['kd_prodi'], "<a href = '../edit_prodi.php?id=" . $data['Id_prodi'] . "'>UBAH</a> | <a href = '../delete_prodi.php?id=" . $data['Id_prodi'] . "'>HAPUS</a>");
            $nomer ++;
        }
        $json_data = array(
            "data"    => $array,
        );

    echo json_encode($json_data);
} 

?>