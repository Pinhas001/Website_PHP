<?php

$servername = "localhost"; $username = "root";$password = "";
try {
$conn = new PDO("mysql:host=$servername;dbname=dwebpj", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Ligação OK<br>";
}catch(PDOException $e) {
//echo "Ligação falhou: " . $e->getMessage();
}

?>
