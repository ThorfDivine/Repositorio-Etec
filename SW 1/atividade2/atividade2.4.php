<?php

$km = $_POST['km'];
$cb = $_POST['cb'];



    
        if( $cb == 0 || $km == 0 ){
            echo "nao pode ter zero ";
        }else{
            
            $cm = $km/$cb;
            echo "seu consumo medio é: ".$cm;
        }
    

    
     
  


?>