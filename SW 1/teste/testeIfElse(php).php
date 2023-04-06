<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method ="POST" >

    <input type="text" name="n1" id="n1">
    <input type="text" name="n2" id="n2">
    <input type="submit" value="enviar" >


    </form>
</body>
</html>

<?php

    @$n1 = $_POST['n1'];
    @$n2 = $_POST['n2'];
    $md = ($n1 + $n2)/2;

    if ($md == null) {
       echo "digite os valores";
    }else{
        if ($md < 2) {
            echo "reprovado sem recuperação, media: ".$md;
        }else {
            if ($md < 5) {
                echo "reprovado tem recuperação, media: ".$md;
            }else{
                if ($md < 7){
                    echo "aprovado bom, media: ".$md;
                }else {
                    echo "aprovado MUITO BOM!, Media: ".$md;
                }
            }
        
        }
    }
    

    
    

?>