<?php
require_once '../../../config/koneksi.php';
require_once '../../../app/Topups.php';

$database = new Database();
$db = $database->dbConnection();

$topup = new Topups($db);

if (isset($_POST['tambah'])) {
    $topup->user_id = $_POST['user_id'];
    $topup->game_id = $_POST['game_id'];
    $topup->amount = $_POST['amount'];
    $topup->topup_date = $_POST['topup_date'];


    $topup->store();
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
                Top Up Game
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3 row">
                        <label for="user_id" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="user_id" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="game_id" class="col-sm-2 col-form-label">Game Id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="game_id" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="amount" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="topup_date" class="col-sm-2 col-form-label">Top Up Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="topup_date" required>
                        </div>
                    </div>
                    <input type="submit" name="tambah" value="Tambah" class="btn btn-warning" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>