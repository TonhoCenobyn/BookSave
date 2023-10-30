<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo2.css">
    <title>Cadastrar livro</title>
</head>

<body class="body_pagPrincipal">
    <div class="navegacao">
        <nav class="navbar navbar-expand-lg" style="background-color: #343330;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="imagens/yellowicon.png" alt="livro_icone" width="40" height="40">
                    <span class = "logo_txt">BookSave</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="pagPrincipal.php">Mostrar livros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  active" href="cadastrarLivro.php">Cadastrar Livro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1>Cadastrar livro</h1>
        <form method="POST" action="../control/controleLivros.php">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor">
            </div>
            <div class="mb-3">
                <label for="classificacao" class="form-label">Classificacao do livro (de 0 a 10):</label>
                <input type="number" step="0.1" max="10" min="0" class="form-control" id="classificacao"
                    name="classificacao">
            </div>
            <button type="submit" class="btn btn-dark" name="opcao" value="Cadastrar">Cadastrar</button>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>