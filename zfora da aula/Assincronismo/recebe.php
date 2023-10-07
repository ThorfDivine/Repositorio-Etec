<?php
include("./conexao.php");
$num = $_POST['n'];
$busca = mysqli_query($conexao, "select * from empresa LIMIT 1 OFFSET ".$num);
$resultado;
                
    while($resultado = mysqli_fetch_row($busca)){
        $res =  "<div class= \"item\" >".
       
             "<img src= \" ".$resultado[5]." \" class=\" imagemItem \" >".

             "<div class=\" item2 \">".
                 "<p> cnpj: ".$resultado[0]."</br>".
                 "nome: ".$resultado[1]."</br>".
                 "gmail: ".$resultado[2]."</br>".
                 "telefone: ".$resultado[4]."</p>".
             "</div>".

         "</div>";

    }
    echo $res;

/* colocar lógica de banco */


?>