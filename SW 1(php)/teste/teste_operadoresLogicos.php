<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
       <label for="">nota1: </label> <input type="number" name="n1" id="n1">
       <label for="">nota2: </label> <input type="number" name="n2" id="n2">
       <label for="">frequência: </label> <input type="number" name="fr" id="fr">
       <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php
@ $n1 = $_POST['n1'];
@ $n2 = $_POST['n2'];
@ $fr = $_POST['fr'];
 $media = ($n1 + $n2)/2;

if($n1 == null or $n2 == null or $fr == null){
    echo "insira um valor";
}

else{

if ($media<2 || $fr < 75){
    echo "<h1>reprovado</h1>";
}
elseif ( ($media>=2 and $media<5) and $fr >75) {
    echo "<h1>recuperação</h1>";
}elseif ( ($media>=5 and $media<8) and $fr>90 ) {
    echo "<h1>Boa</h1>";
}elseif ( ($media>=5 and $media<8) and ($fr>=75 and $fr<=90) ) {
    echo "<h1>regular</h1>";
}elseif ( $media>=8 and $fr>90  ) {
    echo "<h1>muito boa</h1>";    
}elseif ( ($media>=8) and ( $fr>=75 and $fr<=90)) {
    echo "<h1>boa</h1>";
}

}

?>