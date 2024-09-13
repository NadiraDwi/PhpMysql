<table>
    <thead>
        <th>Kode PRODI</th>
        <th>Program Studi</th>
        <th>ACTION</th>
    </thead>

    <?php
    include "koneksi.php";

    $keyword="";
    if(isset($_POST['search'])) {
        $keyword = $_POST['search'];
    }
    $query = mysqli_query($koneksi, "SELECT * FROM prodi WHERE nama_prodi LIKE '%$keyword%' OR kd_prodi LIKE '%$keyword%'");
    
    while($data = mysqli_fetch_assoc($query)){
        echo "<tr>";
            echo "<td>" .$data['kd_prodi']. "</td>";
            echo "<td>" .$data['nama_prodi']. "</td>";
            echo "<td> <a href='edit_prodi.php?id=" .$data['Id_prodi']. "'> EDIT </a> | ";
    ?>
            <a href="delete_prodi.php?id=<?php echo $data['Id_prodi'];?>" 
            onclick="return confirm('Apakah anda yakin menghapus data <?php echo $data['nama_prodi']; ?> ? ')"  > 
                DELETE 
            </a>
    <?php
            echo "</td>";
        echo "</tr>";
    }
    ?>

</table>
