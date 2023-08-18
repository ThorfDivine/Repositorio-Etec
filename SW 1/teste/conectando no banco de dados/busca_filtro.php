<?php 
    include('conectarPhp.php');
    $valor = strtolower($_POST['valurBusca']);
    $busca = mysqli_query($conexao, "select * from usuario where usarname = '$valor'");
    $resultado;
    while($resultado = mysqli_fetch_row($busca)){
        echo $resultado[0] ;
        echo "<br/>";
        echo $resultado[1];
        echo "<br/>";
    }
?>