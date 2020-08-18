<?php
session_start();
include('conexao.php');

if(empty($_POST['utilizador'])) {
	$nameErr = "Insira o utilizador";
}
if(empty($_POST['palavrachave'])) {
	$pwErr = "Insira a palavrachave";
}

$utilizador = mysqli_real_escape_string($conexao, $_POST['utilizador']);
$palavrachave = mysqli_real_escape_string($conexao, $_POST['palavrachave']);

$query = "SELECT * FROM iniciarsessao WHERE utilizador = '{$utilizador}' and palavrachave ='{$palavrachave}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

$finfo = $result->fetch_field_direct(1);

if($row == 1){
	$_SESSION['utilizador'] = $utilizador;	
	header('Location: ../../pagina.php?p=sobrenos');
	exit();
  } else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();  
}