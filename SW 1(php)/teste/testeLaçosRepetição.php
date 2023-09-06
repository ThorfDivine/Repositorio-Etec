<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method = "POST">
    <label > digite quantas vezes</label><input type="number" name="n" id=""> <br>
    <label > digite o numero que sera somado de 1 em 1 ate chegar no anterior</label><input type="number" name="n1" id=""> <br>
    <label for="while">while</label><input type="radio" name="tipo" id="" value = "while">
    <label for="for">for</label><input type="radio" name="tipo" id="" value = "for">
    <label for="doWhile">doWhile</label><input type="radio" name="tipo" id="" value = "doWhile">

    <input type="submit" value="enviar"> <br>
</form>


</body>
</html>

<?php

@$n = $_POST['n'];
@$n1 = $_POST['n1'];
@$tipo = $_POST['tipo'];


if (($n == null) || ($n1 == null) || ($tipo =!null)) {
    echo "digite todos os valores";
}else{

    switch ($tipo){
        case 'while':
        while ($n1 < $n){
        $n1 ++;
        echo "seu número agora é: ".$n1."<br>";}
            break;
        case 'for':
        for ($n2 = $n; $n <=$n2 ; $n ++) { 
            echo "seu número agora é: ".$n1."<br>";    
        }
            break;
        case 'doWhile':
            break;    
        
    
    

    }
}


?>