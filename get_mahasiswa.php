<table>
    <thead>
        <th>NPM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Semester</th>
        <th>Prodi</th>
        <th>Jenis Kelamin</th>
        <th width="100">Action</th>
    </thead>

    <?php
    include "koneksi.php";

    $keyword="";
    if(isset($_POST['search'])) {
        $keyword = $_POST['search'];
    }
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa m  join prodi p on m.kd_prodi=p.kd_prodi WHERE m.npm LIKE '%$keyword%' OR m.nama LIKE '%$keyword%' OR m.kelas LIKE '%$keyword%' OR p.nama_prodi LIKE '%$keyword%' OR m.kd_prodi LIKE '%$keyword%'");
    
    while($data = mysqli_fetch_assoc($query)){
        echo "</tr>";
                        echo "<td>" .$data['npm']."</td>";
                        echo "<td>" .$data['nama']."</td>";
                        echo "<td>" .$data['kelas']."</td>";
                        echo "<td>" .$data['semester']."</td>";
                        echo "<td>" .$data['nama_prodi']."</td>";
                        echo "<td>" .$data['jenis_kelamin']."</td>";
                        echo "<td> <a href='edit_mhs.php?id=".$data['id']."'> EDIT </a>| ";
                    ?>
                    
                        <a href="delete_mhs.php?id=<?php echo $data['id'];?> " onclick="return confirm('Apakah anda yakin menghapus data <?php echo $data['nama']; ?>?')">DELETE</a>
    <?php
            echo "</td>";
        echo "</tr>";
    }
    ?>

</table>
