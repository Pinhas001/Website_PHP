<?php

    include('ui/header.php');
    
    if(isset($_GET['p'])){
        $pag = $_GET['p'];
       
        if($pag=="contacto"){
            include("paginas/contacto.php");
        }else if($pag=="sobrenos"){
            include("paginas/sobrenos.php");
        }else if($pag=="lista"){
            include("paginas/lista.php");
        }else if($pag=="inserirProd"){
            include("paginas/forminserir.php");
        }else if($pag=="insert"){
            include("crudProd/insert.php");
        }else if($pag=="mostrarProd"){
            include("paginas/dadosProd.php");
        } else if($pag=="feedback"){
            include("paginas/feedback.php");
        }
    }else if(isset($GET['search']) || empty($GET['search'])){
        include("paginas/lista.php");
    }
    else{
        include("paginas/paginaPrinc.php");
    }

    include('ui/footer.php');

?>