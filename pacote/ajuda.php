<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main2.css">
    <title>Ajudaí</title>
</head>

<body>
    
    <?php include("views/cabecalho.php");?>
<main>
   <!-----------explicação cadastro----------->
<div class="container px-4 py-5" id="custom-cards">
  <h4 class="pb-2 text-center ">Como podemos te ajudar ?</h4>
  <hr>
  
<section class="container">
    <div class="row">
        
    <div class="card-group">
  <div class="card">
      <br>
  <img src="./img/login.png " height="230" width="330" style="display: block; margin: 0 auto;" />
    <div class="card-body">
      <h5 class="card-title">1º Passo: crique em entrar</h5>
      <p class="card-text">Em segundos você cria sua conta.</p>      
    </div>
  </div>
    <!-------------->
  <div class="card">
      <br>
  <img src="./img/cadastroperfil.png" height="230" width="330"  style="display: block; margin: 0 auto;"/>
    <div class="card-body">
      <h5 class="card-title">2º Passo: cadastre o seu serviço</h5>
      <p class="card-text">Mantenha sempre atualizada sua conta para que seus clientes possam te encontrar.</p>
      <!-------------->
    </div>
  </div>
  <div class="card">
      <br>
  <img src="./img/negocie.png" height="230" width="330"  style="display: block; margin: 0 auto;"/>
    <div class="card-body">
      <h5 class="card-title">3º Passo: negocie direto</h5>
      <p class="card-text">Faça bons negócios e fidelize seus clientes.</p>
      
    </div>
  </div>
</div>
    </div>

</section>
</main>
<?php include("views/footer.php"); ?>


</body>

</html>