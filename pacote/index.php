<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/main2.css">
    <title>Ajudaí</title>
</head>

<body>

    <?php include("views/cabecalho.php"); ?>
<main>
    <!---------------------------------------IMAGENS SLIDE PRINCIPAL-------------------------------------------->
    <div class="slider-principal">
        <img src="./img/slide.png" />
        <img src="./img/slide.png" />
        <img src="./img/slide.png" />
    </div>
    <br>
     <!-------Profissionais--->
      
<br>
<div>
<h2 class="pb-2 text-center ">Qual serviço especializado você procura?</h2>
  <h6 class="pb-2 text-center ">Ache o profissional que você precisa aqui, encanador, eletrecista, carpinteiro...</h6>
</div>
<section class="container">    
<nav class="navbar navbar-light" style="background-color: #ADD8E6;">
  <form class="form-inline" >
    <input class="form-control mr-sm-2"  type="search" placeholder="Persquisar por serviço" aria-label="Search">
    <input class="form-control mr-sm-2" type="search" placeholder="CEP 00.000-000" aria-label="Search">
    <button type="button" class="btn btn-secondary">Busca</button>
  </form>
</nav>
</section>

<!-----------explicação cadastro----------->
<div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 text-center">3º Passos para divulgar o seu serviço</h2>
  
<div class="container">
    <div class="row">
        
    <div class="card-group">
  <div class="card">
      <br>
  <img src="./img/conta.png " height="100" width="100" style="display: block; margin: 0 auto;" />
    <div class="card-body">
      <h5 class="card-title">1º Passo: crie sua conta</h5>
      <p class="card-text">Em segundos você cria sua conta clicando em entrar.</p>      
    </div>
  </div>
    <!-------------->
  <div class="card">
      <br>
  <img src="./img/cadastro.png" height="100" width="100"  style="display: block; margin: 0 auto;"/>
    <div class="card-body">
      <h5 class="card-title">2º Passo: cadastre o seu serviço</h5>
      <p class="card-text">Mantenha sempre atualizado seu cadastro, para que seus clientes possam te encontrar.</p>
      <!-------------->
    </div>
  </div>
  <div class="card">
      <br>
  <img src="./img/conta.png" height="100" width="100" style="display: block; margin: 0 auto;" />
    <div class="card-body">
      <h5 class="card-title">3º Passo: negocie direto com seus clientes</h5>
      <p class="card-text">Faça bons negócios e fidelize seus clientes.</p>
      
    </div>
  </div>
</div>
    </div>

</div>

 <!---------------anuncie aqui --------------->


 

<div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 border-bottom">Anuncie aqui!</h2>

  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" 
    style="background-image: url('img/anuncie.jpg') ;" >
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">  <!--c---> </h2>          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" 
      style="background-image: url('img/anuncie-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Se você viu isso, seus cliente também vão ver! Anuncie </h2>          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" 
      style="background-image: url('img/anuncie-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Sem manter visibilidade sua empresa não vende</h2>          
        </div>
      </div>
    </div>

  </div>
 

<!-------profissionais em destaque--------->
<div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 ">Profissionais em destaque</h2>
  <h6 class="pb-2 border-bottom">Peça sempre avaliação dos seus clientes</h6>
  <br>
</div>
  
<div class="container marketing">
    
<div class="row">
      <div class="col-lg-4">

        <svg class="bd-placeholder-img rounded-circle " width="140" height="140" 
        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" 
        preserveAspectRatio="xMidYMid slice" 
        style= "background-image: url('img/fotomenina.jpg');" ></svg>
        <h2>Camila</h2>
        <p>Another exciting bit of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="usuario.php?u=6">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" 
        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" 
        preserveAspectRatio="xMidYMid slice" style= "background-image: url('img/fotomenino.jpg');" ></svg>
        <h2>Guilherme</h2>
        <p>Another exciting bit of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" 
        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" 
        preserveAspectRatio="xMidYMid slice" style= "background-image: url('img/fotomenino.jpg');" ></svg>
        <h2>Mauro</h2>
        <p>Another exciting bit of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
</div> 
</main>
<!-----------rodapé----------->

<?php include("views/footer.php"); ?>

    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    
</body>
</html>