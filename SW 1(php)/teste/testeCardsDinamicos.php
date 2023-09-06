<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards dinamicos</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            border: 0;
        }
        .body{
            background: "textura-de-papel-branco_.avif";
        }
        .pai{
            width:100%; 
        }
        .pai h1{
            
            margin: 0 45% 0 45%;
            font-size: xx-large;
            
        }
        .card{
            width: 19%;
            height: 350px;       
            background: white;     
            float: left;
            border: 5px solid black;  
            margin: 0 40% 0 40%; 
        }
        .upCard{
            width:100%;
            height: 15%;
            background: gray; 
        }
        .txt{
            text-align: center;
            font-size:x-large;
        }
        .upCard p{
            color: white;
            text-align: center;
            font-size: x-large;
        }
    </style>
</head>

<body background = "textura-de-papel-branco_.avif";>
    
    <div class = "pai">
        <h1>cardizinhos</h1>

        <?php 
        $control = 1;
        while ($control <= 5) {
        ?>
        <div class = "card">
            <div class= "upCard">
                <p>cardizinho <?php echo $control;  ?></p>
            </div>
            <p class= "txt">
            <?php
            $aleatorio = rand(1, 5);
            $aleatorio2 = rand(1, 3);
            switch ($aleatorio) {
                case 1:
                    echo "Manuel gomes esta nos EUA";
                    break;
                case 2:
                    echo "Programar é legal";
                break;
                case 3:
                    echo "Rafael só trabalha dia de terça";
                break;
                case 4:
                    echo "sistema de saida e entrada da etec esta horrivel";
                break;
                case 5:
                    echo "olha só funfou";
                break;
                default:
                    # code...
                    break;
            }

            ?>
            </p>
        </div>
        <?php 
            $control ++;
        }
        ?>
        
    </div>

</body>
</html>