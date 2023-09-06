<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form  method="POST">
            <Label>insira o nome da cidade 1: </Label> <input type="text" name="c1"> <br>
            <Label>insira o nome da cidade 2: </Label> <input type="text" name="c2"><br>
            <Label>insira o nome da cidade 3: </Label> <input type="text" name="c3"><br>
            <Label>insira o nome da cidade 4: </Label> <input type="text" name="c4"><br>
            <Label>insira o nome da cidade 5: </Label> <input type="text" name="c5"><br>
            <Label>insira o nome da cidade 6: </Label> <input type="text" name="c6"><br>
            <Label>insira o nome da cidade 7: </Label> <input type="text" name="c7"><br>
            <Label>insira o nome da cidade 8: </Label> <input type="text" name="c8"><br>
            <Label>insira o nome da cidade 9: </Label> <input type="text" name="c9"><br>
            <Label>insira o nome da cidade 10: </Label> <input type="text" name="c10"><br>
            <input type="submit" value="enviar"><br>
            
        </form>
</body>
</html>

<?php
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];
$c6 = $_POST['c6'];
$c7 = $_POST['c7'];
$c8 = $_POST['c8'];
$c9 = $_POST['c9'];
$c10 = $_POST['c10'];
@$n1 = array(
    'c1' => $c1, 
    'c2' => $c2, 
    'c3' => $c3, 
    'c4' => $c4, 
    'c5' => $c5,
    'c6' => $c6, 
    'c7' => $c7, 
    'c8' => $c8, 
    'c9' => $c9, 
    'c10' => $c10 );
    
echo $n1['c3'];
echo $n1['c3'];

?>