<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <title>Prodi</title>
</head>
<body>
    <div class="container mt-5 mv-5">
        <div class="row">
            <div class="col-12">
                <h1>Data Prodi</h1>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Prodi</th>
                                <th scope="col">Nama Prodi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr>

    </div>
    <script src="js/jquery-3.5.1.js"></script>
   <script src="js/jquery.dataTables.min.js"></script>
   <script src="js/dataTables.bootstrap4.min.js"></script>
  
<script>
    
     $(function(){

          $('.table').DataTable({
             "processing": true,
             "serverSide": false,
             "pageLength":10,

             "ajax":{
                      "url": "ajax_prodi.php?action=table_data",
                      "dataSrc": "data",
                    },
             "columns": [
                 { "data": 0},
                 { "data": 2 },
                 { "data": 1 },
                 { "data": 3 },
             ] 

         });
       });
   </script>
</body>
</html>