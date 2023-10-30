<?php
include 'conexaoBD.php';

function cadastrarLivro($titulo,$autor, $classificacao){
    connect();
    query("INSERT INTO livro (titulo, autor, classificacao)
    VALUES ('$titulo','$autor', '$classificacao')");
    close();
}

function mostrarLivros(){
    connect();
    $resultados=query("SELECT * FROM livro");
    close();
    return $resultados;
}

function mostrarLivrosAlterar($codigo){
    connect();
    $resultados=query("SELECT * FROM livro
    WHERE codigo=$codigo");
    close();
    return $resultados;
}

function alterarLivro($codigo, $titulo, 
$autor, $classificacao){
    connect();
    query("UPDATE livro SET 
    titulo='$titulo', autor='$autor', classificacao = $classificacao 
    WHERE codigo=$codigo");
    close();
}

function excluirLivro($codigo){
    connect();
    query("DELETE FROM livro WHERE codigo=$codigo");
    close();
}