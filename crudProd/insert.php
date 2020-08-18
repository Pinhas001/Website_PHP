<?php
include('bd.php');
try{
    $nome=$_POST['nome'];
    $tipo=$_POST['tipo'];
    $marca=$_POST['marca'];
    $valor=$_POST['valor'];
    $descricao=$_POST['descricao'];

    $sql = "INSERT INTO produtos (nome, tipo, marca, valor, descricao) VALUES ('$nome','$tipo', '$marca', '$valor', '$descricao')";
    $conn->exec($sql);
    
    header('Refresh: 0; URL=../pagina.php?p=lista&ok=1');
    $message = "Produto inserido";echo "<script type='text/javascript'>alert('$message');</script>";
    
}catch(PDOException $e){
    echo 'Erro ao inserir o produto';
}
$conn = null;

?>
