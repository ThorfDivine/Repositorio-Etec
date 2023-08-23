<?php
    include('conectarPhp.php');
    
    $gmail = $_POST["gmail"];
    $senha = $_POST["senha"];

    $busca = mysqli_query($conexao, "select * from usuario where gmail = '$gmail' and senha ='$senha'");

    if(mysqli_num_rows($busca)>0){
        echo "meu primeiro login";
    }else{
        echo "<script>alert('Email ou senha não cadastrados'); window.location.href = '../html/site_do_gustavo.html'</script>";
    }
?>