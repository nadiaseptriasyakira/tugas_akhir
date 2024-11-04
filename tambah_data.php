<?php
require 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id_bunga = $_POST['id_bunga'];
    $nama_bunga = $_POST['nama_bunga'];
    $macam_pupuk = $_POST['macam_pupuk'];

    $sql = "INSERT INTO tb_bunga (id_bunga, nama_bunga, macam_pupuk) VALUES ('$id_bunga', '$nama_bunga', '$macam_pupuk')";

    if ($connection->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan!";
        header("Location: tampil.php");
        exit();
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
    <title>Tambah Data Bunga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Data Bunga</h2>
    <form action="tambah_data.php" method="POST">
        <div class="mb-3">
            <label for="id_bunga" class="form-label">ID Bunga</label>
            <input type="text" class="form-control" id="id_bunga" name="id_bunga" required>
        </div>
        <div class="mb-3">
            <label for="nama_bunga" class="form-label">Nama Bunga</label>
            <input type="text" class="form-control" id="nama_bunga" name="nama_bunga" required>
        </div>
        <div class="mb-3">
            <label for="macam_pupuk" class="form-label">Macam Pupuk</label>
            <input type="text" class="form-control" id="macam_pupuk" name="macam_pupuk" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>