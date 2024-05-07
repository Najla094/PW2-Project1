<?php
require_once '../../../config/koneksi.php';
require_once '../../../app/Topups.php';

$database = new Database();
$db = $database->dbConnection();

$topup = new Topups($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $topup->id = $_GET['id'];

    if($topup->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus produk.";
    }
}

// Tampilkan data dari method index
$data = $topup->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar TopUp Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="mx-auto">
        <a href="create.php" class="btn btn-warning">Tambah</a>
    </div>
    <div class="card">
        <div class="card-header text-white bg-secondary">
            Daftar ToUp Game
        </div>
        <div class="card-body">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">ID</th>
                <th scope="col">User Id</th>
                <th scope="col">Game Id</th>
                <th scope="col">Amount</th>
                <th scope="col">TopUp Date</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td scoope="row"><?php echo $no++; ?></td>
                    <td scoope="row"><?php echo $row['id']; ?></td>
                    <td scoope="row"><?php echo $row['user_id']; ?></td>
                    <td scoope="row"><?php echo $row['game_id']; ?></td>
                    <td scoope="row"><?php echo $row['amount']; ?></td>
                    <td scoope="row"><?php echo $row['topup_date']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Top Up Game ini?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
</body>
</html>