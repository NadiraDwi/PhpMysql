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
            <h1>TAMBAH DATA PROGRAM STUDI</h1>
            <hr />
            <FORM action="simpan_prodi.php" method="post">
            <table>
                <tr>
                    <td><h3>Kode Program Studi<h3></td>
                    <td><input type="text" name="kode"/></td>
                </tr>
                <tr>
                    <td><h3>Program Studi<h3></td>
                    <td><input type="text"  name="prodi"/></td>
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
