<body>
<div class="d-flex justify-content-center pl-4" style="margin-top: 70px">  
    <h1 class="display-3 mx-auto ml-2 m-3" style="width: 800px;">Feedback</h1>
</div>
<div class="container d-flex justify-content-center ">
    <table class="table center" style="width:75%">
        <thead>
            <tr>
                <th scope="col" style="width:25%">Nome</th>
                <th scope="col">Comentário</th>
                <th scope="col" style="width:25%">Data</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include('./crudProd/selectcomment.php');
        ?>
        </tbody>
    </table>
</div>
<?php
if(isset($_SESSION['utilizador'])){
    echo "<form action=\"crudProd/comentar.php\" class=\"m-3\" method=\"post\">";
    echo " <div class=\"container d-flex justify-content-center\">";
    echo "<textarea class=\"form-control\" style=\"width:50%\" name=\"comentario\" rows=\"1\" placeholder=\"Insira o seu comentário\"></textarea>";
    echo "<button type=\"submit\" class=\"btn btn-primary\">Comentar</button></div></form>";
}
 ?>
</body>

