<?php

require_once 'classes/usuarios.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);

	//Verificar se esta preenchido
	if (empty($nome) || empty($telefone) || empty($email) || empty($senha) || empty($confirmarSenha))
		echo '<div class="msg-erro">Preencha todos os campos!</div>';

	//Verificar se as senhas são iguais
	else if ($senha != $confirmarSenha)
		echo '<div class="msg-erro">Senha e confirmar senha não correspondem!</div>';

	//Verificar se o email já existe
	else if (!Usuario::cadastrar($nome, $telefone, $email, $senha))
		echo '<div class="msg-erro">Email ja cadastrado!</div>';

	//Cadastrar
	else
		echo '<div id="msg-sucesso">Cadastrado com sucesso! Acesse para entrar!</div>';
}
?>

<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Cadastro</title>
</head>
<meta charset="utf-8">

<body>
	<form method="POST">
		<h2>Cadastrar</h2>
		<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
		<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
		<input id="email" type="text" name="email" placeholder="Usuário" maxlength="40">
		<input type="password" name="senha" placeholder="Senha" maxlength="15">
		<input type="password" name="confSenha" placeholder="Confirmar Senha">
		<input type="submit" name="acao" value="Cadastrar" />
		<a href="login.php"> >>LOGIN<< </a>
	</form>
</body>

</html>