<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario;

?>

<html lang="pt-br">
    <head>
        <title>Form contato</title>
        <link rel="stylesheet" href="./estilo.css">
    </head>
        <meta charset="utf-8"> 
    
<body>
        <form method="POST">
            <h2>Cadastrar</h2>
            <input type="text" name="nome" placeholder="Nome Completo"maxlength="30">
            <input type="text" name="telefone" placeholder="Telefone"maxlength="30">
            <input id="email" type="text" name="email" placeholder="Usuário"maxlength="40">
            <input type="password" name="senha" placeholder="Senha"maxlength="15">
            <input type="password" name="confSenha" placeholder="Confirmar Senha">
            <input type="submit" name="acao" value="Cadastrar" />                    
        </form>
        
<?php
//verificar se clicou no botao 
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);
    //verificar se esta preenchido
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
        $u->conectar("projeto_login","localhost", "root", "root" );
        if($u->msgErro == "")// se esta tudo ok
        {
            if($senha == $confirmarSenha)
            {
                if($u->cadastrar($nome, $telefone, $email, $senha))
                {
                    echo "Cadastrado com sucesso! Acesse para entrar!";
                }
                else
                {
                    echo "Email ja cadastrado!";
                }
            }
            else
            {
                echo "Senha e confirmar senha não correspondem! ";
            }
        }
        else
        {
            echo "Erro: ".$u->msgErro;
        }
    }else
    {
        echo "Preencha todos os campos";
    }
}

        
?>
</body>
</html>