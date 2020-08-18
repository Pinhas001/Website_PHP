<?php
 session_start();
include('bd.php');
try{
    $nome=$_SESSION['utilizador'];
    $comentario=$_POST['comentario'];

    $sql = "INSERT INTO feedback (nome, comentario) VALUES ('$nome','$comentario')";
    $conn->exec($sql);
    
    header('Refresh: 0; URL=../pagina.php?p=feedback');
    
}catch(PDOException $e){
    echo 'Erro ao inserir o comentario';
}
$conn = null;

?>
