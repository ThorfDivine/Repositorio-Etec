<?php
    include("./conexao.php");

    
    $idVaga = $_POST['idVaga'];

    mysqli_query($con, 
    "UPDATE vaga
    SET aberta = 0
    WHERE id_vaga = '$idVaga'");
    echo "sucesso";
?>