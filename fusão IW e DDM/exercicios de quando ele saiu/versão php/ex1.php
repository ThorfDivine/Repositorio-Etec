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
    <label> qual sua altura? </label>
    <input type="number" name="alt" id="alt"> <br>
    <label >qual seu sexo? </label> <br>
    <label for="M">M</label><input type="radio" name="sex"  value="M">
    <label for="F">F</label><input type="radio" name="sex"  value="F">  <br>
    <input type="submit" value="enviar">
    </form>

</body>
</html>
<?php 

    @$sex = $_POST['sex'];
    @$alt = $_POST['alt'];
    @$ideal;


    switch ($sex) {
        case 'F':
            $ideal = (62.1*$alt) - 44.7;
            echo "seu peso ideal é: ".$ideal;
            break;
        case 'M':
            $ideal =  (72.7*$alt) - 58;
            echo "seu peso ideal é: ".$ideal;
            break;
        
        default:
            echo "digite um valor";
            break;
    }

?>