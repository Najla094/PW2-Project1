<?php
require_once '../../../config/koneksi.php';
require_once '../../../app/Games.php';

$database = new Database();
$db = $database->dbConnection();

$game = new Games($db);


if (isset($_POST['tambah'])) {
    $game->name = isset($_POST['name']) ? $_POST['name'] : '';
    $game->platform = isset($_POST['platform']) ? $_POST['platform'] : '';



    $game->store();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Game</title>
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
                Tambah Data Game 
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="name" id="name">
                                <option value="Mobile Legends">Mobile Legends</option>
                                <option value="PUBG Mobile">PUBG Mobile</option>
                                <option value="Valorant">Valorant</option>
                                <option value="Free Fire">Free Fire</option>
                                <option value="Clash Of Clans">Clash Of Clans</option>
                                <option value="Stumble Guys">Stumble Guys</option>

                            </select>
                        </div>
                        <label for="platform" class="col-sm-2 col-form-label">Platform</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="platform" id="platform">
                                <option value="Mobile">Mobile</option>
                                <option value="PC">PC</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="tambah" value="Tambah" class="btn btn-warning" />
                    </div>
                </form>
                </div>
            </div>
        </div>
</body>

</html>