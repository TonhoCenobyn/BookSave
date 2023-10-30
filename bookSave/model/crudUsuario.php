<?php
    include 'conexaoBD.php';

    function cadastrarUsuario($nome, $senha){
        connect();
        query("INSERT INTO conta (usuario, senha) VALUES ('$nome', '$senha')");
        close();
    }
    function buscarUsuario($nome){
        connect();
        $resultados = query("SELECT * FROM conta WHERE usuario = '$nome'");
        close();
        return $resultados;
    }
?>