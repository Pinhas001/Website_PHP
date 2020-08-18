<?php
include('bd.php');

try{
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $tipo=$_POST['tipo'];
    $marca=$_POST['marca'];
    $valor=$_POST['valor'];
    $descricao=$_POST['descricao'];

    $sql = "UPDATE `produtos` SET `nome`='$nome',`tipo`='$tipo',`marca`='$marca',`valor`='$valor',`descricao`='$descricao' WHERE `id`= '$id'";
    $conn->exec($sql);
        
    header('Refresh: 0; URL=../pagina.php?p=lista');
    $message = "Produto editado";echo "<script type='text/javascript'>alert('$message');</script>";
      
}catch(PDOException $e){
    echo 'Erro ao editar o produto'."<br>";
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

$conn = null;

?>