<?php
    session_start();

    if(!$_SESSION['login']){
        header("location:home.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CARA MEMBUAT LOGIN DENGAN SESSION DI PHP</title>
        
        <link rel="stylesheet" href="style.css" >
    </head>
    <body>

        <?php include "navigasi.php"; ?>
        <div class="container" style="margin-top:20px">
            <h1>DATA MAHASISWA</h1>
            <hr />
            <a href = "tambah_mahasiswa.php" class="tambah">TAMBAH DATA PROGRAM STUDI</a> 
            <br>
            <hr>
            <input type="text" id="cari" name="cari" placeholder="Cari disini...">
            <hr>
            <div id="hasil"></div>
        </div>            

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                load_data();
                function load_data(search){
                $.ajax({
                    url:"get_mahasiswa.php",
                    method:"POST",
                    data: {
                    search: search
                    },
                    success:function(data){
                    $('#hasil').html(data);
                    }
                });

                }
                $('#cari').keyup(function(){
                var search = $("#cari").val();
                load_data(search);
                });
            });
            
        </script>


    </body>
</html>


<!-- <?php
    session_start();

    if(!$_SESSION['login']){
        header("location:index.php");
    }
?> -->

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>PROJECT - MAHASISWA</title>
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php include "navigasi.php"; ?>
        <div class="container" style="margin-top:20px" align="right">
            <h1 align="left">DATA MAHASISWA</h1>
            <hr />
            <a href = "tambah_mahasiswa.php" class="tambah">TAMBAH DATA MAHASISWA</a>
            <br>
            <hr>
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
                $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa m join prodi p on m.kd_prodi=p.kd_prodi ORDER BY m.id");

                while ($data = mysqli_fetch_assoc($query)) {
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
                    echo "</tr>";
                }
                ?>
            </table> -->
        </div>
    </body>
</html>
