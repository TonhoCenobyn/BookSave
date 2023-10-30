<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login Usuario</title>
</head>

<body>
    <img src="imagens/livros_background.png" alt="fundo" class = "background">
    

    <div class="usuarioLogin_conteudo">
        <div class = "usuarioLogin_box">
           <h1><strong>Faça seu login:</strong></h1>
            <form class = "usuarioForm" method="POST" action="../control/controleUsuario.php">
                <div class = "usuarioForm_usuario">
                    <label for="usuario">Usuário:</label> <br>
                    <input id = "usuario"type="text" class="usuarioForm_input" name="usuario">
                </div>
                <div class = "usuarioForm_senha">
                    <label for="senha">Senha:</label> <br>
                    <input id = "senha" type="password" class="usuarioForm_input" name="senha">
                </div>
                <?php
                         session_start();
                         
                         if (isset($_SESSION["erro_login"])) {
                             echo "<p style='color: red;'>" . $_SESSION["erro_login"] . "</p>";
                             unset($_SESSION["erro_login"]); // Limpe a mensagem de erro para evitar que ela seja exibida novamente
                         }
                    ?>
                <input type="submit" name = "opcao" value="Entrar" class="enviar">

                <p>Não possui um cadastro? então <a href="usuarioCadastro.php">cadastre-se aqui</a></p>
            </form>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>