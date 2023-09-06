<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicios</title>

    <script>
        let root = document.querySelector(':root');

        function desativar() {
            let rootStyle = getComputedStyle(root)
            let value = rootStyle.getPropertyValue('--none')

            if(value != 'none') {
                root.style.setProperty('--none','none')
              
            }
        }
        function ativar() {

            let rootStyle = getComputedStyle(root)
            let vale = rootStyle.getPropertyValue('--none')
            console.log(vale)
            
                root.style.setProperty('--none', 'inline')
                
            
        }
        


    </script>

    <style>
        :root{
        --none: none;
        }
        .mud{
            display: var(--none);
        }

    </style>

</head>
<body>
    

    <h1>atividades</h1>

    <form action="#" method= "POST";> 

    <label > escolha qual atividade deseja: </label> <br>
    <label >ex 1</label><input type="radio" name="ex" value="ex1" id="" onclick = "desativar()"> <br>
    <label >ex 2</label><input type="radio" name="ex" value="ex2" id="" onclick = "desativar()"> <br>
    <label >ex 3</label><input type="radio" name="ex" value="ex3" id="" onclick = "desativar()"> <br>
    <label >ex 4</label><input type="radio" name="ex" value="ex4" id="" onclick = "desativar()"> <br>
    <label >ex 5</label><input type="radio" name="ex" value="ex5" id="" onclick = "desativar()"> <br>
    <label >ex 6</label><input type="radio" name="ex" value="ex6" id="" onclick = "ativar()"> <br>
    <label >ex 7</label><input type="radio" name="ex" value="ex7" id="" onclick = "desativar()"> <br>
    <label >ex 8</label><input type="radio" name="ex" value="ex8" id="" onclick = "desativar()"> <br>

    <label for="" class ="mud">quantas vezes vai repetir: </label>
    <input type="number" name="x" id="x" class ="mud" min = "1" value = "1"  require>
    <label for="" class ="mud">qual o nome: </label>
    <input type="text" name="name" id="name" class = "mud" require>
    <input type="submit" value="escolher"> <br>
    <br><br>
<!-- -->
<?php 
    @$ex = $_POST['ex'];


    switch ($ex) {
        case 'ex1':
           @$cont = 0;
           
           while ($cont <= 15) {
            if ($cont == 15) {
                echo $cont;
             }else{
                 echo $cont.", ";
             }   
            $cont++;
           }
           break;
           case 'ex2':
            @$cont = 12;
           
              while ($cont <= 24) {
                if ($cont == 24) {
                   echo $cont;
                }else{
                    echo $cont.", ";
                }    
            $cont++;}
            break;
                case 'ex3':
                    @$cont = 7;
                    while ($cont <= 31) {
                        if($cont %2 == 1){
                        if ($cont == 31) {
                            echo $cont;
                         }else{
                             echo $cont.", ";
                         }   }
                        $cont++;
                       }
            
                    break;
                    case 'ex4':
                        @$cont = 10;
                        while ($cont >= -20) {
                            if($cont %2 == 0){
                            if ($cont == -20) {
                                echo $cont;
                             }else{
                                 echo $cont.", ";
                             }   }
                            $cont--;
                           }

                        break;
                        case 'ex5':
                            @$cont = 1;
                        while ($cont <= 50) {
                            if($cont %3 == 0){
                                echo "Sistemas web, " ;
                            }else{
                                if ($cont == 50) {
                                echo $cont;
                             }else{
                                 echo $cont.", ";
                             }   }
                            $cont++;
                           }
            
                            break;
                            case 'ex6':
                               @$nome = $_POST['name'];
                               @$n =  $_POST['x'];
                               $cont = 1;
                               
                                    while ($cont <= $n) {
                                        echo $nome."<br>";
                                        $cont ++;
                                    }

                                

                                break;
                                case 'ex7':
                                    @$valor = 0;
                                    @$cont = 1;
                                    while ($cont <= 15) {
                                        $valor = $valor + $cont;
                                        $cont ++;                                        
                                    }
                                    
                                    echo $valor;
            
                                    break;
                                    case 'ex8':
                                       $n = 2;
                                       $cont = 1;
                                       
                                       while ($cont <=10) {
                                        echo "2 x".$cont." = ".$n*$cont."<br>";
                                        $cont ++;


                                       }
                
            
                                        break;        
                                        
        default:
            echo "escolha um valor";
            break;
    }

?>
    </form>



</body>
</html>


