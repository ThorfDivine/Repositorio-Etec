<?php

    echo "conexão bem sucedida";
    $gravar = mysqli_query($conexao, "insert into usuario(usarname, gmail, senha) values('$username', '$gmail', '$senha')" );
    if ($gravar){
        echo "<br/>gravação bem sucedida";
    }else{
        echo "<br/> erro de gravação";
    }

?>