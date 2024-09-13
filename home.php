<?php
    session_start();

    if(!$_SESSION['login']){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CARA MEMBUAT LOGIN DENGAN SESSION DI PHP</title>
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php include "navigasi.php"; ?>
        <div class="container" style="margin-top:20px">
            <h1>HOME</h1>
            <hr />
            <h2>Selamat Datang di Aplikasi Project NADIRA</h2>
        </div>
    </body>
</html>
