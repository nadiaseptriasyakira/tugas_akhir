<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id_bunga = $_GET['id'];

    $result = $connection->query("SELECT * FROM tb_bunga WHERE id_bunga = $id_bunga");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_bunga = $_POST['nama_bunga'];
    $macam_pupuk = $_POST['macam_pupuk'];

    $sql = "UPDATE tb_bunga SET nama_bunga='$nama_bunga', macam_pupuk='$macam_pupuk' WHERE id_bunga=$id_bunga";

    if ($connection->query($sql) === TRUE) {
        echo "Data berhasil diperbarui!";
        header("Location: tampil.php"); 
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update Data Bunga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>Update Data Bunga</h3>
        <form method="post" action="">
            <div class="mb-3">
                <label for="nama_bunga" class="form-label">Nama Bunga</label>
                <input type="text" class="form-control" id="nama_bunga" name="nama_bunga" value="<?= $row['nama_bunga'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="macam_pupuk" class="form-label">Macam Pupuk</label>
                <input type="text" class="form-control" id="macam_pupuk" name="macam_pupuk" value="<?= $row['macam_pupuk'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="submit" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</body>
</html>