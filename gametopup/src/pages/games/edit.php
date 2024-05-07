<?php
require_once '../../../config/koneksi.php';
require_once '../../../app/Games.php';

$database = new Database();
$db = $database->dbConnection();

$game = new Games($db);

if (isset($_POST['update'])) {
    $game->id = $_POST['id'];
    $game->name = $_POST['name'];
    $game->platform = $_POST['platform'];


    $game->update();
    header("Location: index.php");
    exit;
} elseif (isset($_GET['id'])) {
    $game->id = $_GET['id'];
    $stmt = $game->edit();
    $num = $stmt->rowCount();

    if ($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Game</title>
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
                Edit Data Game
            </div>
            <div class="card-body">
            <form method="POST" action="">
                <div class="mb-3 row">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <select class="form-select" name="name" required>
                        <option value="Mobile Legends" <?php echo ($name == 'Mobile Legends') ? 'selected' : ''; ?>>Mobile Legends</option>
                        <option value="PUBG Mobile" <?php echo ($name == 'PUBG Mobile') ? 'selected' : ''; ?>>PUBG Mobile</option>
                        <option value="Valorant" <?php echo ($name == 'Valorant') ? 'selected' : ''; ?>>Valorant</option>
                        <option value="Free Fire" <?php echo ($name == 'Free Fire') ? 'selected' : ''; ?>>Free Fire</option>
                        <option value="Clash Of Clans" <?php echo ($name == 'Clash Of Clans') ? 'selected' : ''; ?>>Clash Of Clans</option>
                        <option value="Stumble Guys" <?php echo ($name == 'Stumble Guys') ? 'selected' : ''; ?>>Stumble Guys</option>
                    </select>
                </div>
                <label for="platform" class="col-sm-2 col-form-label">Platform</label>
                <div class="col-sm-10">
                    <select class="form-select" name="platform" required>
                        <option value="Mobile" <?php echo ($platform == 'Mobile') ? 'selected' : ''; ?>>Mobile</option>
                        <option value="PC" <?php echo ($platform == 'PC') ? 'selected' : ''; ?>>PC</option>
                    </select>
                </div>
                </div>
                <input type="submit" name="update" value="Update" class="btn btn-warning" />
            </form>
            </div>
        </div>
</body>

</html>