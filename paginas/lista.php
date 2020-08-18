<html>
<body>
    <div class="mx-auto" style="width: 800px; margin-top: 70px">
        <h2 class="display-3 m-3">Lista dos Produtos</h2>
        <?php 
        if(!isset($_SESSION['utilizador'])){
          echo "";
        }
        else if($_SESSION['utilizador'] == 'admin'){
          echo '<a class="m-3 class="mx-auto href="pagina.php?p=inserirProd">Inserir novo produto</a><hr>';
        }
        ?>
        <form class="md-form mt-0" method="GET">
            <div class="col-md-12">
                <input class="form-control input-sm col-md-11 " style ="width: 90%; display: inline" type="text" name="search" placeholder="Insira o nome do produto" aria-label="Search">
                <button class="btn btn-primary align-top " type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ver mais</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include('./crudProd/selectall.php');
            ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>