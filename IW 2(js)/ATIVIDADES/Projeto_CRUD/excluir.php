<?php
    include("./conexao.php");
    $id = $_POST['id'];
    $comando = mysqli_query($con, "delete FROM funcionarios where idfuncionarios='$id'");
    
    if($comando){
        echo "1";
    }
    else{
        echo "0";
    }
?>