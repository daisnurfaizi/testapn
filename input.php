<?php
include('control.php');
$input = new rumahsakit();
if (isset($_POST['tombol_tambah'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id = $_POST['id'];

    $add_status = $input->add_data($name, $email, $phone, $address, $id);
    if ($add_status) {
        header('Location: index.php');
    }
}
?>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data User</h3>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="number" name="phone" class="form-control" id="phone" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="address" id="address"></textarea>
                        </div>
                    </div>
            </div>
            <div class="form-group row">

            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>