<?php

session_start();
require_once "classes/usuarios.php";

$isProfileUser = false;

if (isset($_GET["u"]))
    $user = Usuario::get($_GET["u"]);
else {
    $user = Usuario::getCurrent();
    $isProfileUser = true;
}

if (!$user) {
    header("Location: tela de login/index.php");
    die();
}

if (isset($_POST["nome"]))
{
    echo "Veio";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main2.css">
    <title>Perfil do Usuário</title>
    <script>
        function edit() {
            let shows = document.getElementsByClassName("sShow");
            Array.prototype.forEach.call(shows, (el) => {
                el.classList.add("d-none");
            });

            let edits = document.getElementsByClassName("eShow");
            Array.prototype.forEach.call(edits, (el) => {
                el.classList.remove("d-none");
            });
        }

        function cancel() {
            let shows = document.getElementsByClassName("sShow");
            Array.prototype.forEach.call(shows, (el) => {
                el.classList.remove("d-none");
            });

            let edits = document.getElementsByClassName("eShow");
            Array.prototype.forEach.call(edits, (el) => {
                el.classList.add("d-none");
            });
        }
    </script>
</head>

<body>

    <?php require("views/cabecalho.php"); ?>

    <!---- Card de Perfil ----->
    <div class="container">
        <div class="row" id="userarea">
            <div class="col-4 leftarea">

                <!----- Informações Básicas ----->
                <div id="basicinfo">
                    <img class="avatar" src="avatars/img_avatar2.png" alt="User Picture">
                    <h1><?= $user->nome ?></h1>
                    <p>Titulo</p>
                    <p>Cidade</p>
                </div>

            </div>
            <div class="col-8 rightarea">
                <form method="post">
                    <table class="table p-5" id="fullinfo">
                        <tbody>
                            <tr>
                                <th>Nome Completo</th>
                                <td>
                                    <span class="sShow"><?= $user->nome; ?></span>
                                    <input type="text" name="nome" class="form-control d-none eShow" value="<?= $user->nome; ?>"></input>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    <span class="sShow"><?= $user->email; ?></span>
                                    <input type="email" class="form-control d-none eShow" value="<?= $user->email; ?>"></input>
                                </td>
                            </tr>
                            <tr>
                                <th>Telefone</th>
                                <td>
                                    <span class="sShow"><?= $user->telefone; ?></span>
                                    <input type="tel" class="form-control d-none eShow" value="<?= $user->telefone; ?>"></input>
                                </td>
                            </tr>
                            <tr>
                                <th>Endereço</th>
                                <td>
                                    <span class="sShow"><?= $user->endereco; ?></span>
                                    <textarea class="form-control d-none eShow" rows="3"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="sShow">
                                        <span class="badge badge-secondary">Animação</span>
                                        <span class="badge badge-secondary">Game Design</span>
                                        <span class="badge badge-secondary">Modelagem 3D</span>
                                        <span class="badge badge-secondary">Ilustração</span>
                                        <span class="badge badge-secondary">Photoshop</span>
                                        <span class="badge badge-secondary">Adobe Illustrator</span>
                                        <span class="badge badge-secondary">Manobrista</span>
                                        <span class="badge badge-secondary">Operação de Máquinas Leves</span>
                                        <span class="badge badge-secondary">Manutenção de Fritadeiras</span>
                                        <span class="badge badge-secondary">Horticultura</span>
                                        <span class="badge badge-secondary">Mecânico</span>
                                        <span class="badge badge-secondary">Encanador</span>
                                        <span class="badge badge-secondary">Invocação de Entidades Malignas</span>
                                        <span class="badge badge-secondary">Passear com Cachorrinhos</span>
                                    </span>
                                    <textarea class="form-control d-none eShow" rows="5"></textarea>
                                </td>
                            </tr>
                            <?php if ($isProfileUser) : ?>
                                <tr>
                                    <td colspan="2">
                                        <input type="button" class="btn btn-success btn-sm pt-0 pb-0 float-right sShow" value="Editar" onclick="edit()"></input>
                                        <input type="submit" class="btn btn-success btn-sm pt-0 pb-0 float-right d-none eShow" value="Aplicar" onclick=""></input>
                                        <input type="button" class="btn btn-danger btn-sm pt-0 pb-0 float-right d-none eShow" value="Cancelar" onclick="cancel()"></input>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>