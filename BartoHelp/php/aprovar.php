<?php 
    include("./conexao.php");
    $cpf = $_GET['cpf'];
    $id_vaga = $_POST['post'];

    mysqli_query($con, "update interesse set aprovacao = 1 where id_usuario = '$cpf' and id_vaga = $id_vaga");
    
    header("location: ./empresa/home.php");
?>