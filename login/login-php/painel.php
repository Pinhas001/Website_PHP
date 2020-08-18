<?php
session_start();
include('verifica_login.php');
if($_SESSION['utilizador'] == 'admin'){
    echo $_SESSION['utilizador'];
}
?>
<h2><a href="logout.php">Sair</a></h2>
