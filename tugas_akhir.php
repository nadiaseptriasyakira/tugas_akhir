<?php
require 'connection.php';

$data = myquery("select p.id_bunga, p.nama_bunga, p.macam_pupuk
from tb_bunga as p"
);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <body>
    <div class="container">
        <h3>DATA BUNGA</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>id_bunga</th>
              <th>nama_bunga</th>
              <th>macam_pupuk</th>
            </tr>
          </thead>
               <tbody>
                <?php foreach ($data as $row): ?>
                  <tr>
                    <td><?=($row['id_bunga'])?></td>
                    <td><?=($row['nama_bunga'])?></td>
                    <td><?=($row['macam_pupuk'])?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>