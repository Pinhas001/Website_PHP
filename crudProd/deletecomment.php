<?php
include('bd.php');

try{
  $id=$_GET['id'];

  $sql = "DELETE FROM `feedback` WHERE id=$id";
  $conn->exec($sql);
  
  header('Refresh: 0; URL=../pagina.php?p=feedback');
  $message = "Comentário eliminado";echo "<script type='text/javascript'>alert('$message');</script>";
  
}catch(PDOException $e){
  echo 'Erro ao eliminar o comentário';
}

$conn = null;

?>
 