<?php

require_once "classes/usuarios.php";
$users = Usuario::getAll();

?>

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
	<div class="container ">
		<table class="table table-striped mt-5">
			<thead class="thead-dark">
				<tr>
					<th>Nome</th>
					<th>Função</th>
					<th>Mais</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user) : ?>
					<tr>
						<td><?= $user->nome ?></td>
						<td></td>
						<td><a href="usuario.php?u=<?= $user->id_usuario ?>">Perfil</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>	

</body>
</html>