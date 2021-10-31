<html lang="pt-br">
    <head>
        <title>Form contato</title>
        <link rel="stylesheet" href="./estilo.css">
    </head>
        <meta charset="utf-8"> 
    
    <body>
        <form method="POST">
            <h2>Login do Cliente</h2>
            <h5>Digite seu usuário*</h5>
            <input id="email" type="text" name="email" placeholder="ex. joao@gmail.com"/>
            <h5>Senha*</h5>
            <input id='password' type="password" name="senha" placeholder="ex. 3456778@Le"/>
            <input type="submit" name="acao" value="Entrar" />       
            <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se!</strong></a> 
        </form>
        <script>
            var email = document.getElementById('email');
            var password = document.getElementById('password');

            email.addEventListener('focus', ()=>{
                email.style.borderColor = "#254b68";
            });
            email.addEventListener('blur', ()=>{
                email.style.borderColor = "#ccc";
            });
          
            password.addEventListener('focus', ()=>{
                password.style.borderColor = "#254b68";
            });
            password.addEventListener('blur', ()=>{
                password.style.borderColor = "#ccc";
            });

        </script>
        <?php

        ?>
    </body>
</html>