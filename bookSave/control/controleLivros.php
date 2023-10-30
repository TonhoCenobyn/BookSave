<?php
include '../model/crudLivros.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
    case 'Cadastrar':
        cadastrarLivro(
            $_POST["titulo"],
            $_POST["autor"],
            $_POST["classificacao"]
        );
        header("Location: ../view/pagPrincipal.php");
        break;
    case 'Alterar':
        alterarLivro($_POST["codigo"],
        $_POST["titulo"],
        $_POST["autor"],
        $_POST["classificacao"]);
        header("Location: ../view/pagPrincipal.php");
        break;
    case 'Excluir':
            excluirLivro($_POST["codigo"]);
            header("Location: ../view/pagPrincipal.php");
        break;
}
