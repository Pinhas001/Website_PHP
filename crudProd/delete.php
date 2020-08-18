<?php
include('bd.php');

try{
  $id=$_GET['id'];

  $sql = "DELETE FROM `produtos` WHERE id=$id";
  $conn->exec($sql);
  
  header('Refresh: 0; URL=../pagina.php?p=lista&ok=1');
  $message = "Produto eliminado";echo "<script type='text/javascript'>alert('$message');</script>";
  
}catch(PDOException $e){
  echo 'Erro ao eliminar o produto';
}

$conn = null;

?>
 