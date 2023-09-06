<?php
    
    include('conexaoBD.php');

    $nome = strtolower($_POST["nome"]);
    $sobrenome = strtolower($_POST["sobrenome"]);
    $cpf = strtolower($_POST["cpf"]);
    $email = strtolower($_POST["email"]);
    $senha = strtolower($_POST["senha"]);
    $criptoSenha = base64_encode($senha);

    //gravando no banco
        $gravar = mysqli_query($conexao, "insert into cliente(cpf, nome, sobrenome, email, senha) values('$cpf', '$nome', '$sobrenome','$email','$criptoSenha')" );
        if ($gravar){
            echo "<script>alert('cadastrado com sucesso'); window.location.href = '../HTML/home.html';</script>";
        }else{
            echo "<br/> erro de gravação";
        } 

    ?>