<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo2.css">
    <title>Pagina principal</title>
</head>

<body class="body_pagPrincipal">
    <div class="navegacao">
        <nav class="navbar navbar-expand-lg" style="background-color: #343330;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="imagens/yellowicon.png" alt="livro_icone" width="40" height="40">
                    <span class="logo_txt">BookSave</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="pagPrincipal.php">Mostrar livros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrarLivro.php">Cadastrar Livro</a>
                        </li>

                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="usuarioLogin.php">teste</a>
                    </li>
                </div>
            </div>
        </nav>
    </div>
    <div class="conteudo">
        <h1 class="teste">Livros cadastrados</h1>
        <div class="tabela_livro">
            <table class="table table-striped table-bordered border-warning">
                <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Avaliação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../model/crudLivros.php';

                    $resultados = mostrarLivros();

                    foreach ($resultados as $linha) {
                        $porcentagem = $linha['classificacao'] * 10;

                        if ($porcentagem >= 66) {
                            $corBarra = 'success';
                        } else if ($porcentagem >= 33) {
                            $corBarra = 'warning';
                        } else {
                            $corBarra = 'danger';
                        }

                        echo "
                        <tr>
                            <td>$linha[titulo]</td>
                            <td>$linha[autor]</td>
                            <td>
                            <div class='progress'>
                                <div class='progress-bar progress-bar-striped bg-$corBarra' role='progressbar' style='width: $porcentagem%' aria-valuenow='$linha[classificacao]</td>' aria-valuemin='0' aria-valuemax='10'></div>
                            </div>
                            <td><a class='btn btn-warning' href='editarLivro.php?codigo=$linha[codigo]'>Editar</a></td>
                        </tr>
                        ";
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>