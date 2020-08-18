
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <a class="navbar-brand text-white"><img src="img/icon.png" width="40px">ech Place</a>
  <button class="navbar-toggler custom-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="pagina.php?p=sobrenos">Sobre Nós</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="pagina.php?p=lista">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="pagina.php?p=contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="pagina.php?p=feedback">Feedback</a>
      </li>
    </ul>
    <a class="nav-link text-light ">
    <?php
    if(!isset($_SESSION['utilizador'])){
      $_SESSION['nao_autenticado'] = false;
      echo '<a class="nav-link text-light" href="login/login-php/login.php">Login</a>';
    }
    else if(isset($_SESSION['utilizador'])){
      echo $_SESSION['utilizador'];
    }
    ?>
    </a>
    <?php
    if(!isset($_SESSION['utilizador'])){
      echo "";
    }
    else if(isset($_SESSION['utilizador'])){
    
      echo '<a class="nav-link text-light " href="login/login-php/logout.php">Logout</a>';
    }
    ?>
  </div>
</nav>

