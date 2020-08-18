<?php 
    if(isset($_GET['ok'])){
    if($_GET['ok'] == 1){
        $message = "Mensagem Enviada";echo "<script type='text/javascript'>alert('$message');</script>";
    }
}    
?>
<div class="mx-auto" style="width: 800px; margin-top: 70px">
    <h2 class="display-3 m-3">Contacte-nos</h2>
<form name="contactform" method="post" action="email.php">
    <br>

    <div class="col-6">
        <label>Assunto</label>
        <select class="form-control" for="assunto" name="assunto">
            <option>Selecione a opção...</option>
            <option>Pedido de informação sobre uma encomenda</option>
            <option>Informações sobre um produto</option>
            <option>Informações sobre trocas ou devoluções</option>
            <option>Outras informações</option>
        </select>
    </div>

    <br>

    <div>
        <div class="col-6">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" class="form-control" require>
        </div>
    </div><br>

    <div class="input-group mb-3 col-6" >
        <label for="remetente"></label>
        <br>
        <div class="input-group-prepend" >
            <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control fix-rounded-right" name="remetente" required>
    </div>

    <div class="mb-3 col-6">
        <label for="mensagem">Mensagem</label>
        <textarea class="form-control" name="mensagem" placeholder="Insira uma mensagem." required></textarea>
    </div>

    <button class="btn btn-primary ml-3" type="submit" value="submit">Submeter</button>
    

</form>
</div>
