<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css.css">
</head>
<body onload="adicionar()" >
    <script> var number = 0 ;</script>
    <h1>adicionados: </h1> <br>
    <div class="container" id="add">
        
    </div>
    <div class="altera">
        <button class="esquerda" onclick="rmv() "><</button>
        <button class="direita"  onclick="add()"> ></button>
    </div>
    <script>
        var items = "";  
    
    function adicionar()
    {
        var data = "n=" + number;
        
        var xhr;

        if (window.XMLHttpRequest) { // Mozilla, Safari, ...

            xhr = new XMLHttpRequest();

        } else if (window.ActiveXObject) { // IE 8 and older

            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }


            xhr.open("POST", "recebe.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
            xhr.send(data);
            xhr.onreadystatechange = display_data;

            function display_data() {

                if (xhr.readyState == 4) {

                    if (xhr.status == 200) {

                        //alert(xhr.responseText);	 
                        
                        items = xhr.responseText;
                        if (items == "" || items == null || items == " ") {
                            document.getElementById('add').innerHTML = "sem mais resultados.."
                        }else{
                            document.getElementById('add').innerHTML = items ;     
                        }

                    } else {

                        alert('There was a problem with the request.');

                    }
                }
            }

        //limit sql
    }
    function add(){
        if(number>=0 && items != "" && items != null && items != " "){
            number+=10;
            
            adicionar();    
        }
    }
    function rmv(){
        if(number>0){
            number-=10;
            adicionar();    
        }
    }
    </script>
</body>
</html>