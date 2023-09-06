<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at4</title>
</head>
<body>
    
    <form action="#" method = "POST" >

    <label> digite as horas trabalhadas: </label><input type="text" name="n1" id="n1">
    <LABEl>digite o cod: </LABEl><input type="text" name="n2" id="n2">
    <input type="submit" value="calcular">



    </form>

</body>
</html>

<?php

    @$n1= $_POST['n1'];
    @$n2= $_post['n2'];


    if($n1 == null){
        echo "digite o número e mande";
    }else {
      
        if( $n1<=50 ){
            $SB = $n1 * 10;
            echo "o valor total deu: ".$SB;
        }else{


            if ( $n1 > 50) {
            
            

            $SB = $n1 * 10;    
            $sub = ($n1 - 50)* 10; 
            $SE = (($n1 - 50)*20) - $sub;

            $ST = $SE + $SB; 

            echo 'obrigado pelo seu otimo trabalho!!, seu sario total foi de: R$'.$ST;

        }

        }

    }
    

?>