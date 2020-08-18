<?php include('./crudProd/bd.php');

$id = $_GET['id'];
$stmt = $conn->query("SELECT * FROM produtos WHERE id=$id");

$row = $stmt->fetch();
?>
<div class="mx-auto" style="width: 800px;">

    <h2 class="display-3 m-3"> <?php echo $row['nome'] ?> </h2>
    <hr>

   <?php include('./crudProd/selectDados.php') ?>
</div>