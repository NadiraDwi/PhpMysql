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
            <h1>DATA PROGRAM STUDI</h1>
            <hr />
            <a href = "tambah_prodi.php" class="tambah">TAMBAH DATA PROGRAM STUDI</a> 
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
                    url:"get_prodi.php",
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
