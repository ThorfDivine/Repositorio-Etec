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
    <label>diga seu estado(geografico): </label> <br>
    <label >SP</label><input type="radio" name="est" value="SP">
    <label >MG</label><input type="radio" name="est" value="MG">
    <label >RJ</label><input type="radio" name="est" value="RJ"> <br>
    <input type="submit" value="enviar">
    </form>
</body>
</html>


<?php 
    @$est = $_POST["est"];

    switch ($est) {
        case "SP":
        echo "você é Paulista";
            break;
        case "MG":
        echo "você é Carioca";
        break;
        case "RJ":
        echo "você é Mineiro";
            break;
        case null:
            echo "digite um valor";
            break;    
        default:
        echo "você é.. sla o que vc é kkkk";
            break;
    }


?>