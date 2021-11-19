<?php
    if(session_status() == PHP_SESSION_NONE)
        session_start();
    
    require_once "classes/usuarios.php";

    $cuser = Usuario::getCurrent();
?>

<!---------- Cabeçalho ---------->
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo.png">
    </a>
  </div>
</nav>

<!---------- Menu ---------->

<nav id="menu" class="">
    <div class="container">
        <a class="menuitem" href="index.php">Início</a>
        <a class="menuitem" href="profissionais.php">Profissionais</a>
        <a class="menuitem" href="sobre.php">Sobre</a>
        <a class="menuitem" href="ajuda.php">Ajuda</a>
        <div class="space"></div>

        <?php if($cuser != null): ?>
        <a href="sair.php"><button type="button" class="btn btn-outline-danger btn-sm">Sair</button></a>
        <a href="usuario.php"><button type="button" class="btn btn-success btn-sm m-1">perfil</button></a>
        <?php else: ?>
        <a href="login.php"><button type="button" class="btn btn-primary pl-5 pr-5 m-1">Entrar</button></a>
        <?php endif; ?>
    </div>
</nav>