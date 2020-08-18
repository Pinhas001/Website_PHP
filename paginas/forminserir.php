
<html>
<body>
    <div class="mx-auto" style="width: 800px; margin-bottom: 60px; margin-top: 70px">
    <h2 class="display-3 m-3">Inserir novo Produto</h2>
        <form action="crudProd/insert.php" class="m-3" method="post">
            Nome do Produto:<br>
            <input class="col-6 form-control" type="text" name="nome"><br>
            Tipo: <br>
            <input class="col-6 form-control" type="text" name="tipo"><br>
            Marca: <br>
            <input class="col-6 form-control" type="text" name="marca"><br>
            Valor: <br>
            <input class="col-6 form-control" type="text" name="valor"><br>
            Descrição: <br>
            <div class="row mx-md-n3 col-6" for="descricao">
                <textarea class="form-control" name="descricao" required></textarea>
            </div>
            <br>
            <input class="btn btn-primary mt-2" type="submit">
        </form>
    </div>
</body>
</html>