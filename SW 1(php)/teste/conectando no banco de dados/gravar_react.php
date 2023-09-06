<?php

    include("conectarPhp.php");
    $json = file_get_contents('php://input');//pega o conteudo que foi enviado || pega o pacotinha
    $conteudo = json_decode($json, true); // aqui nos temos nosso formulario
    $valor_nome = $conteudo['valor_nome']; // pega o valor que tem dentro
    $valor_gmail = $conteudo['valor_gmail']; // pega o valor que tem dentro
    $valor_senha = $conteudo['valor_senha']; // pega o valor que tem dentro
    mysqli_query($conexao, "insert into usuario(username, gmail, senha) values ('$valor_nome', '$valor_gmail','$valor_senha')");



?>