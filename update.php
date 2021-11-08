<?php
include('control.php');

$input = new rumahsakit();
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id = $_POST['id'];

    $add_status = $input->update($name, $email, $phone, $address, $id);
    if ($add_status) {
        header('Location: index.php');
    }
}
$datauser = $input->get_by_id($_GET['id']);
?>
<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Data User</h3>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" value="<?= $datauser['id'] ?>" name="id">
                            <input type="text" name="name" value="<?= $datauser['name'] ?>" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email" value="<?= $datauser['email'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="number" name="phone" class="form-control" id="phone" value="<?= $datauser['phone'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="address" id="address"><?= $datauser['address'] ?></textarea>
                        </div>
                    </div>
            </div>
            <div class="form-group row">

            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>