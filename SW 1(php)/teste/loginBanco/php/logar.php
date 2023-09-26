<?php
    //session
    //tem que ser logo abaixo do php OBRIGATORIO
    session_start();
    //session_start sempre na primeira linha do código! OBRIGATORIO!!

    include('conectarPhp.php');
    if (!empty($_POST)) {
        # code...
    $gmail = $_POST["gmail"];
    $senha = $_POST["senha"];

    $senhaCripto = base64_encode($senha);


    $busca = mysqli_query($conexao, "select * from usuario where gmail = '$gmail' and senha ='$senhaCripto'");

    if(mysqli_num_rows($busca)>0){ // tem mais de uma linha de sql logo ele tem login
        $_SESSION['PUDIMLogado7w7']=1;
        echo "<script>window.location.href = '../html/logado.php'</script>";
    }else{ // não voltou nenhuma linha, logo não esta registrado!
        $_SESSION['PUDIMLogado7w7']=0;
       echo "<script>alert('Email ou senha não cadastrados'); window.location.href = '../html/login.php'</script>";
    }}
?>