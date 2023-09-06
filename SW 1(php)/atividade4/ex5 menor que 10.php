<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at5</title>
</head>
<body>
    
    <form action="#" method = "POST" >

    <input type="text" name="n1" id="n1">
    <input type="submit" value="calcular">



    </form>

</body>
</html>

<?php

    @$n1= $_POST['n1'];

    if($n1 == null){
        echo "digite o número e mande";
    }else {
       if($n1 < 10){
        echo "seu número é : ".$n1;
       }else {
        echo "mandaram eu não exibir;";
       }  
    }
   

?>