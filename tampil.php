<?php
require 'connection.php'; 
$data = myquery("select p.id_bunga, p.nama_bunga, p.macam_pupuk from tb_bunga as p");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_bunga = $_POST['nama_bunga'];
    $macam_pupuk = $_POST['macam_pupuk'];

    $sql = "INSERT INTO tb_bunga (nama_bunga, macam_pupuk) VALUES ('$nama_bunga', '$macam_pupuk')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tampil.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
       .text-bg-secondary {
            background-color: #FFC0CB; 
            color: white; 
            padding: 20px; 
            border-radius: 20px; 
            text-align: center; 
        }

     .content-box {
            border: 2px solid #FFB6C1;
            border-radius: 15px;
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
        }
        }

        button {
            background-color: #FFC0CB;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #808080;
        }

        .btn-tambah-data {
            background-color: red;
            color: white;
        }

        .btn-tambah-data:hover {
            background-color: darkgrey;
        }

        .detail-text {
            display: none;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="tampil.php" method="GET">
   <div align = "right">
    <a href="galery.php" class="btn btn-secondary">Sebelumnya</a>
    <a href="logout.php" class="btn btn-secondary" onclick="return confirm('Apakah Anda yakin ingin logout?')">Log out</a>
   </div>
   <br>
    </form>
<div class="text-bg-secondary">
    <br>
    <h1>TABEL DATA</h1>
</div>
<br>
<div class="container">
<table class="table table-bordered">
            <thead>
                <tr>
                    <th>id_bunga</th>
                    <th>nama_bunga</th>
                    <th>macam_pupuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['id_bunga'] ?></td>
                    <td><?= $row['nama_bunga'] ?></td>
                    <td><?= $row['macam_pupuk'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $row['id_bunga'] ?>" class="btn btn-primary">Update</a>
                        <a href="function.php?action=delete&id=<?= $row['id_bunga'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="tambah_data.php?id=<?= $row['id_bunga'] ?>" class="btn btn-danger">Tambah data</a>
</div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>