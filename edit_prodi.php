<?php
    session_start();

    if(!$_SESSION['login']){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PROJECT - TAMBAH MAHASISWA</title>
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php include "navigasi.php"; ?>
        <div class="container" style="margin-top:20px">
            <h1>EDIT DATA PROGRAM STUDI</h1>
            <hr />
            <?php
                include "koneksi.php";
                $id_prodi = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM prodi where id_prodi=$id_prodi");
                $data = mysqli_fetch_assoc($query);
            ?>
            <FORM action="update_prodi.php" method="post">
            <input type="HIDDEN" name="id" value="<?php echo $data['Id_prodi']; ?> " method='post'>
            <table>
                <tr>
                    <td><h3>Kode Program Studi<h3></td>
                    <td><input type="text" name="kode" value="<?php echo $data['kd_prodi'];?>"></td>
                </tr>
                <tr>
                    <td><h3>Program Studi<h3></td>
                    <td><input type="text"  name="prodi" value="<?php echo $data['nama_prodi']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="UPDATE" class="submit"/>
                        <input type="reset" name="batal" value="BATAL" class="batal"/>
                    </td>
                </tr>
            </table>
            </FORM>
        </div>
    </body>
</html>
