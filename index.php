<?php
include('control.php');
$con = new rumahsakit;
$data_pasien = $con->show();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data User</h3>
            </div>
            <div class="card-body">
                <a href="input.php" class="btn btn-success">Tambah</a>
                <hr />
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>adress</th>
                        <th>Opsi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($data_pasien as $row) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td><a class='btn btn-info' href='update.php?id=" . $row['id'] . "'>Update</a>
                        <a class='btn btn-danger' href='delete.php?id=" . $row['id'] . "'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>