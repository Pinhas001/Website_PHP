<?php
//o id só aparece se o admin tiver a sessão iniciada

if(!isset($_SESSION['utilizador']) || $_SESSION['utilizador'] != 'admin'){
    echo "<form";
    echo "Tipo: <br>";
    echo "<input class=\"col-6 form-control\" type=\"text\" name=\"tipo\" value=\"".$row['tipo']."\" readonly><br>";
    echo "Marca: <br>";
    echo "<input class=\"col-6 form-control\" type=\"text\" name=\"marca\" value=\"".$row['marca']."\" readonly><br>";
    echo "Valor: <br>";
    echo "<input class=\"col-6 form-control\" type=\"text\" name=\"valor\" value=\"".$row['valor']."\" readonly><br>";
    echo "Descrição: <br>";
    echo "<div class=\"row mx-md-n3 col-6\" for=\"descricao\" >";
    echo "<textarea disabled class=\"form-control\" name=\"descricao\" required>".$row['descricao']."</textarea></div><br>";
    echo "<a  href=\"pagina.php?p=lista\" class=\"btn btn-primary\">Voltar atrás </a></div></form>";
}
else if($_SESSION['utilizador'] == 'admin'){
    echo "<form action=\"crudProd/update.php\" class=\"m-3\" method=\"post\">";
    echo "<h2 style=\"margin-top: 40px\">Id do Produto</h2>";
    echo "<input class=\"col-6 form-control\" type=\"text\" name=\"id\" value=\"".$row['id']."\" readonly><br>"; 
    echo "Nome do Produto:<br>";
    echo "<input class=\"col-6 form-control\" type=\"text\" name=\"nome\" value=\"".$row['nome']."\"><br>";
    echo "Tipo: <br>";
    echo "<input class=\"col-6 form-control\" type=\"text\" name=\"tipo\" value=\"".$row['tipo']."\"><br>";
    echo "Marca: <br>";
    echo "<input class=\"col-6 form-control\" type=\"text\" name=\"marca\" value=\"".$row['marca']."\"><br>";
    echo "Valor: <br>";
    echo "<input class=\"col-6 form-control\" type=\"text\" name=\"valor\" value=\"".$row['valor']."\"><br>";
    echo "Descrição: <br>";
    echo "<div class=\"row mx-md-n3 col-6\" for=\"descricao\">";
    echo "<textarea class=\"form-control\" name=\"descricao\" required>".$row['descricao']."</textarea></div><br>";
    echo('<td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm mr-3" onclick="location.href=\'crudProd/delete.php?id='.$row['id'].'\'" >Remover</button></span>');
    echo('<td><span class="table-remove"><button type="submit" class="btn btn-warning btn-rounded btn-sm my-0" onclick="location.href=\'crudProd/update.php?id='.$row['id'].'\'" >Update</button></span>');
}
$conn = null;
?>
