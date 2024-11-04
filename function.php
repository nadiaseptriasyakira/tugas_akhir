<?php 
  require 'connection.php';

  if(isset($_GET['action']) && isset($_GET['id'])){
    $action = $_GET['action'];
    $id = $_GET['id'];

    switch($action){
      case 'delete':
        delete_data($id);
        break;
      case 'update':
      
        break;
      default:
        echo "Aksi tidak dikenali!";
    }
  } else {
    echo "Aksi dan ID tidak didefinisikan!";
  }

  function delete_data($id){
    global $connection;
    
    $res = mysqli_query($connection, "DELETE FROM tb_bunga WHERE id_bunga = $id ");

    if($res){
      header("Location: tampil.php?messages=Berhasil dihapus");
      exit();
    } else {
      
      header("Location: tampil.php?messages=Gagal dihapus");
      exit();
    }
  }
?>