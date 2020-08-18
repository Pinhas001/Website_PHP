<?php

include('bd.php');

$stmt = $conn->query("SELECT * FROM feedback");

if(!isset($_SESSION['utilizador']) || $_SESSION['utilizador'] != 'admin'){
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['comentario']."</td>";
        echo "<td>".$row['data']."</td>";
        echo "</tr>";
    }
}
else if($_SESSION['utilizador'] == 'admin'){
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['comentario']."</td>";
        echo "<td>".$row['data']."</td>";
        echo('<td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm mr-3" onclick="location.href=\'crudProd/deletecomment.php?id='.$row['id'].'\'" >Remover</button></span>');
        echo "</tr>";
    }
}

$conn = null;
?>