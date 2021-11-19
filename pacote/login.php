<?php
require_once "classes/usuarios.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	if (empty($email) || empty($senha))
		echo "Preencha todos os campos!";
	else if (!Usuario::logar($email, $senha))
		echo "Email e/ou senha estão incorretos!";
	else
		header("location: usuario.php");
}

?>

<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Ajudaí</title>
</head>

<body>
	<form method="POST">
		<a href="index.php"><img src="img/Ajudai.png" /></a>
		<h2>Login do Cliente</h2>
		<h5>Digite seu usuário*</h5>
		<input id="email" type="text" name="email" placeholder="ex. joao@gmail.com" />
		<h5>Senha*</h5>
		<input id='password' type="password" name="senha" placeholder="ex. 3456778@Le" />
		<input type="submit" name="acao" value="Entrar" />
		<a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>
	</form>
	<script>
		var email = document.getElementById('email');
		var password = document.getElementById('password');

		email.addEventListener('focus', () => {
			email.style.borderColor = "#254b68";
		});
		email.addEventListener('blur', () => {
			email.style.borderColor = "#ccc";
		});

		password.addEventListener('focus', () => {
			password.style.borderColor = "#254b68";
		});
		password.addEventListener('blur', () => {
			password.style.borderColor = "#ccc";
		});
	</script>
</body>

</html>