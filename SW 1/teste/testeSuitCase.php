<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-shadow: 0 0 3px #000;
        }
    </style>
</head>
<body>
    
    <form action="#" method ="POST">

    <input type="text" name="cor" id="cor">
    <input type="submit" value="enviar">

    </form>

</body>
</html>

<?php
    
    @$cor = strtolower($_POST['cor']);

    if($cor == null){
        echo "digite sua cor favorita";
    }else {
        
        switch ($cor) {

            case 'vermelho':
                echo '<h1 style= "color: red; float: left;"> cor vermelho</h1>  <div style = "width : 20px; height: 20px; background-color :red; float: left;" ></div>';
                break;

            case 'azul':
                echo '<h1 style= "color: blue; float: left;"> cor azul</h1> <div style = "width : 20px; height: 20px; background-color :blue; float: left;" ></div>'; 
                break;

            case 'amarelo':
                echo '<h1 style= "color: yellow; float: left;"> cor amarela</h1> <div style = "width : 20px; height: 20px; background-color :yellow; float: left;" ></div>';   
                break;

            default:
                echo 'qualquer outro ';
                break;    
                
               
        }

    }
    

?>