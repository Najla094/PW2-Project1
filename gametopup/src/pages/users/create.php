<?php
require_once '../../../config/koneksi.php';
require_once '../../../app/Users.php';

$database = new Database();
$db = $database->dbConnection();

$user = new Users($db);

if (isset($_POST['tambah'])) {
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->balance = $_POST['balance'];


    $user->store();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 700px
        }

        .card {
            margin-top: 70px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                Tambah Data
            </div>
            <div class="card-body">
                <form method="POST" action="create.php">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="balance" class="col-sm-2 col-form-label">Balance</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="balance" required>
                        </div>
                    </div>
                    <input type="submit" name="tambah" value="Tambah" class="btn btn-warning" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>