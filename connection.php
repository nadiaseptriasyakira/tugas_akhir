<?php
$hostname = 'localhost';
$username = 'root'; 
$password = ''; 
$db_bunga = 'db_bunga';

$connection = mysqli_connect($hostname, $username, $password, $db_bunga);

if (!$connection) {
    die("koneksi gagal: " . mysqli_connect_error());
}

function myquery($query){
    global $connection;
    $res = mysqli_query($connection, $query);
    $returns = [];

  while ($data = mysqli_fetch_assoc($res)){
    $returns[] = $data;
  }
    return $returns;
}
?>