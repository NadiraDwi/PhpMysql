<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "project_nadira";

    $koneksi = mysqli_connect($host, $username, $password);

    if ($koneksi) {
        // echo "Koneksi Berhasil, Alhamdulillah";

        //memilih database
        $pilih_db = mysqli_select_db($koneksi, $database);
        if ($pilih_db) {
            //    echo "Database terpilih";
        }
    } else {
        echo "Koneksi Gagal, di periksa lagi";
    }

    ?>
</body>

</html>