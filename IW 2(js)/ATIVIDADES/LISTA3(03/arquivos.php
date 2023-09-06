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
        
        
                function ex1(){
                    let n1 = 1;
                    while(n1 <=15){
                    
                        window.alert(n1)                  
                        n1++;

                    }
                }
                function ex2(){
                    let n1 = 12;
                    while(n1 <=24){
                    
                        window.alert(n1)                  
                        n1++;

                    }
                }
                function ex3(){
                    let n1 = 7;
                    while(n1 <=31){
                    if (n1%2==1) {
                        window.alert(n1)
                    }
                                          
                        n1++;

                    }
                }
                function ex4(){
                    let n1 = 10;
                    while(n1 >= -20){
                    if (n1%2==0) {
                        window.alert(n1)
                    }
                                          
                        n1--;
                    }
                }
                function ex5(){
                    let n1 = 1;
                        
                        while (n1 <= 50) {
                            if(n1 %3 == 0){
                                alert("Sistemas web");
                            }else{
                                alert(n1);
                                }
                            n1++;
                           }

                    }
                
                function ex6(){
                    let txt = document.getElementById("name").value;
                    let n = parseInt(document.getElementById('x').value);
                    let n1 = 1;
                    while(n1 <= n){
                        window.alert(txt);                 
                        n1++;
                    }
                }
                function ex7(){
                    let n1 = 0;
                    let cont = 1;
                    while(cont <= 15){         
                        n1 = n1 + cont;     
                        cont++;
                    }
                    window.alert(n1)   
                }
                function ex8(){
                    let n = 2;
                    let cont = 1;
                                       
                    while (cont <=10) {
                    document.getElementById('h1').innerHTML+= "2 x"+cont+" = "+n*cont+"<br>";
                    cont ++;


                    

                    }
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
    <label >ex 1</label><input type="radio" name="ex" value="ex1" id="" onclick = "desativar(), ex1()"> <br>
    <label >ex 2</label><input type="radio" name="ex" value="ex2" id="" onclick = "desativar(), ex2()"> <br>
    <label >ex 3</label><input type="radio" name="ex" value="ex3" id="" onclick = "desativar(), ex3()"> <br>
    <label >ex 4</label><input type="radio" name="ex" value="ex4" id="" onclick = "desativar(), ex4()"> <br>
    <label >ex 5</label><input type="radio" name="ex" value="ex5" id="" onclick = "desativar(), ex5()"> <br>
    <label >ex 6</label><input type="radio" name="ex" value="ex6" id="" onclick = "ativar()"> <br>
    <label >ex 7</label><input type="radio" name="ex" value="ex7" id="" onclick = "desativar(), ex7()"> <br>
    <label >ex 8</label><input type="radio" name="ex" value="ex8" id="" onclick = "desativar(), ex8()"> <br>
    <h1 id="h1"></h1>
    
    <label for="" class ="mud">quantas vezes vai repetir: </label>
    <input type="number" name="x" id="x" class ="mud" min = "1" value = "1"  require>
    <label for="" class ="mud">qual o nome: </label>
    <input type="text" name="name" id="name" class="mud" require>
    <button type="button" onclick = "ex6()">enviar(ex8)</button>
    <br><br>


    </body>

        