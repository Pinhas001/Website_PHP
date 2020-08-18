<?php

include('bd.php');
if(isset($_GET['search'])){
    $nome=$_GET['search'];
    $stmt = $conn->query("SELECT * FROM produtos WHERE nome LIKE '%$nome%' ");
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['tipo']."</td>";
        echo "<td>".$row['marca']."</td>";
        echo "<td>".$row['valor']."</td>";
        echo "<td>".$row['descricao']."</td>";
        echo('<td><span class="table-update"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0" onclick="location.href=\'pagina.php?p=mostrarProd&id='.$row['id'].'\'" >Ver mais</button></span></td>');
        echo "</tr>";
    } 
}else{
    $stmt = $conn->query("SELECT * FROM produtos");
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['tipo']."</td>";
        echo "<td>".$row['marca']."</td>";
        echo "<td>".$row['valor']."</td>";
        echo "<td>".$row['descricao']."</td>";
        echo('<td><span class="table-update"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0" onclick="location.href=\'pagina.php?p=mostrarProd&id='.$row['id'].'\'" >Ver mais</button></span></td>');
        echo "</tr>";
    }

}

$conn = null;
?>
