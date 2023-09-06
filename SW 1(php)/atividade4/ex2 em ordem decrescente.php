<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at2</title>
</head>
<body>
    
    <form action="#" method = "POST" >

    <input type="text" name="n1" id="n1">
    <input type="text" name="n2" id="n2">
    <input type="submit" value="calcular">



    </form>

</body>
</html>

<?php

    @$n1= $_POST['n1'];
    @$n2= $_POST['n2'];

    if($n1 == null){
        echo "digite os números e mande";
    }else {
       
        if($n1<=$n2){
            echo $n2." ".$n1;
        }if ($n1>$n2) {

            echo $n1." ".$n2;

        } 

    }
   

?>