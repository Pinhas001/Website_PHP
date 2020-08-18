<?php

session_start();
?>

<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style><?php include "../style.css"?> </style>
    <title>TECHPLACE</title>
</head>
<body>
<div class="centro" >
    <img class=" title" src="../../img/icon.png" width="90px" alt=""></img>
</div>
<div class="alinhar"> 
    <div class="">
        <h3 class="centro">Login</h3>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="centro ">
            <p class="badge badge-danger">Dados de login inválidos</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <div class="container centro">
            <div class="row teste">
                <form action="login.php" method="POST">
                        <div class="error">
                            <input name="utilizador" name="text" class="input form-control form-control-lg" placeholder="O seu login" required >
                        </div>
                        <div class="error">
                            <input name="palavrachave" class="input form-control form-control-lg" type="password" placeholder="A sua palavra-chave" required> 
                        </div>
                    <button class="btn btn-success btn-block" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
</body>

</html>