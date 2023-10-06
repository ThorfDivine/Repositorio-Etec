<?php
include("./conexao.php");
$busca = mysqli_query($conexao, "select * from empresa");
$resultado;
                
    while($resultado = mysqli_fetch_row($busca)){
        echo "<div class= \"item\" >".
       
             "<img src= \" ".$resultado[5]." \" class=\" imagemItem \" >".

             "<div class=\" item2 \">".
                 "<p> cnpj: ".$resultado[0]."</br>".
                 "nome: ".$resultado[1]."</br>".
                 "gmail: ".$resultado[2]."</br>".
                 "telefone: ".$resultado[4]."</p>".
             "</div>".

         "</div>";

    }


/* colocar lógica de banco */


?>