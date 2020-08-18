<?php
session_start();
session_destroy();
$_SESSION['nao_autenticado'] = false;
header('Location: ../../pagina.php?p=sobrenos');
exit();