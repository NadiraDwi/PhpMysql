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
            <h1>EDIT DATA MAHASISWA</h1>
            <hr />
            <?php
                include "koneksi.php";
                $id= $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa m join prodi p on m.kd_prodi=p.kd_prodi where m.id=$id");
                $data = mysqli_fetch_assoc($query);
            ?>
            <FORM action="update_mhs.php" method="post" enctype="multipart/form-data">
            <input type="HIDDEN" name="id" value="<?php echo $data['id']; ?> " method='post'>
            <table>
            <table>
                <tr>
                    <td><h3>NPM<h3></td>
                    <td><input type="text" name="NPM" value="<?php echo $data['npm'] ?>"/></td>
                </tr>
                <tr>
                    <td><h3>Nama<h3></td>
                    <td><input type="text" name="nama" value="<?php echo $data['nama']?>"/></td>
                </tr>
                <tr>
                    <td><h3>Kelas<h3></td>
                    <td><input type="text" name="kelas" value="<?php echo $data['kelas']?>"/></td>
                </tr>
                <tr>
                    <td><h3>Semester<h3></td>
                    <td>
                        <label><input type="radio" name="semester" value="I" <?php if($data['semester']== 'I') echo "checked"; ?>/> I</label>
                        <label><input type="radio" name="semester" value="II" <?php echo($data['semester']== 'II') ? 'checked' : ''?>/> II</label>
                        <label><input type="radio" name="semester" value="III" <?php echo($data['semester']== 'III') ? 'checked' : ''?>/> III</label>
                        <label><input type="radio" name="semester" value="IV" <?php echo($data['semester']== 'IV') ? 'checked' : ''?>/> IV</label> <br>
                        <label><input type="radio" name="semester" value="V" <?php echo($data['semester']== 'V') ? 'checked' : ''?>/> V</label>
                        <label><input type="radio" name="semester" value="VI" <?php echo($data['semester']== 'VI') ? 'checked' : ''?>/> VI</label>
                        <label><input type="radio" name="semester" value="VII" <?php echo($data['semester']== 'VII') ? 'checked' : ''?>/> VII</label>
                        <label><input type="radio" name="semester" value="VIII" <?php echo($data['semester']== 'VIII') ? 'checked' : ''?>/> VIII</label>
                    </td>
                </tr>
                <tr>
                    <td><h3>Prodi<h3></td>
                    <td>
                        <select name="prodi">
                            <?php
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM prodi");
                                while ($data_prodi= mysqli_fetch_assoc($query)) {
                                    if($data['kd_prodi']==$data_prodi['kd_prodi']){
                                        $terselected = "selected";
                                    }else{
                                        $terselected = "";
                                    }
                                    echo "<option value='".$data_prodi['kd_prodi']."'$terselected>".$data_prodi['nama_prodi'].
                                    "</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><h3>Jenis Kelamin<h3></td>
                    <td>
                        <label><input type="radio" name="JK" value="P" <?php echo($data['jenis_kelamin']== 'P') ? 'checked' : ''?>>Perempuan</label>
                        <label><input type="radio" name="JK" value="L" <?php echo($data['jenis_kelamin']== 'L') ? 'checked' : ''?>>Laki-Laki</label>
                    </td>
                </tr>
                <tr>
                    <td><h3>Foto Profil</h3></td>
                    <td>
                        <img src="gambar/<?php echo $data['foto_profil'] ?>" height="100" alt=""> <br>
                        <input type="file" name="foto">
                    </td>
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
