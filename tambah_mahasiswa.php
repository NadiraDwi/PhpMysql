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
            <h1>TAMBAH MAHASISWA</h1>
            <hr />
            <FORM action="simpan_mhs.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><h3>NPM<h3></td>
                    <td><input type="text" name="NPM" /></td>
                </tr>
                <tr>
                    <td><h3>Nama<h3></td>
                    <td><input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td><h3>Kelas<h3></td>
                    <td><input type="text" name="kelas" /></td>
                </tr>
                <tr>
                    <td><h3>Semester<h3></td>
                    <td>
                        <label><input type="radio" name="SEMESTER" value="I" /> I</label>
                        <label><input type="radio" name="SEMESTER" value="II" /> II</label>
                        <label><input type="radio" name="SEMESTER" value="III" /> III</label>
                        <label><input type="radio" name="SEMESTER" value="IV" /> IV</label> <br>
                        <label><input type="radio" name="SEMESTER" value="V" /> V</label>
                        <label><input type="radio" name="SEMESTER" value="VI" /> VI</label>
                        <label><input type="radio" name="SEMESTER" value="VII" /> VII</label>
                        <label><input type="radio" name="SEMESTER" value="VIII" /> VIII</label>
                    </td>
                </tr>
                <tr>
                    <td><h3>Prodi<h3></td>
                    <td>
                        <select name="prodi">
                            <?php
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM prodi");
                                while ($data= mysqli_fetch_assoc($query)) {
                                    echo "<option value='".$data['kd_prodi']."'>".$data['nama_prodi']."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><h3>Jenis Kelamin<h3></td>
                    <td>
                        <label><input type="radio" name="JK" value="P" />Perempuan</label>
                        <label><input type="radio" name="JK" value="L" />Laki-Laki</label>
                    </td>
                </tr>
                <tr>
                    <td><h3>Foto Profil</h3></td>
                    <td>
                        <input type="file" name="foto">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="SIMPAN" class="submit"/>
                        <input type="reset" name="batal" value="BATAL" class="batal"/>
                    </td>
                </tr>
            </table>
            </FORM>
        </div>
    </body>
</html>
