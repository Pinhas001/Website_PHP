<?php
define('host', 'localhost');
define('id', 'root');
define('pc', '');
define('db', 'dwebpj');

$conexao = mysqli_connect(host, id, pc, db) or die ('Não foi possível conectar');