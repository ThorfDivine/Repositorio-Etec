<?php
    
    include('conexaoBD.php');

    $nome = strtolower($_POST["nome"]);
    $sobrenome = strtolower($_POST["sobrenome"]);
    $cpf = strtolower($_POST["cpf"]);
    $email = strtolower($_POST["email"]);
    $senha = strtolower($_POST["senha"]);
    $criptoSenha = base64_encode($senha);

    //gravando no banco
        $gravar = mysqli_query($conexao, "insert into cliente(nome, sobrenome, cpf, email, senha) values('$nome', '$sobrenome', '$cpf','$email','$criptoSenha')" );
        if ($gravar){
            echo "<br/>gravação bem sucedida";
        }else{
            echo "<br/> erro de gravação";
        } 

    ?>