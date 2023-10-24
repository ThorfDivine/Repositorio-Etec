<?php
session_start();
if (!isset($_SESSION) || $_SESSION =="" || $_SESSION == null) {
    header('Location: ../../html/login.html');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Material Icons -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- End -->
    <!-- ==================================================================================== -->
        <!-- CSS -->
            <link rel="stylesheet" href="../../style/vagas.css">
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/header.css">
        <!-- End -->
    <title>BartoHelp - Vagas</title>
</head>
<body onload="adicionar()">
    <script> var number = 0 ;</script>
    <header></header>
    
        <div class="vagas" id="vagas"></div>
        <section class="bigMarginTop bigMarginBotom centralize">
                

        </section>

    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
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


                xhr.open("POST", "../../php/Assincronismo.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            //alert(xhr.responseText);	 
                            
                            items = xhr.responseText;
                            
                                document.getElementById('vagas').innerHTML = items ; 
                                console.log(items);    
                                console.log($_SESSION['id']);

                            

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
                window.scrollTo(0, 0);
                adicionar();    
            }
        }
        function rmv(){
            if(number>0){
                number-=10;
                window.scrollTo(window.scrollY, 0);
                adicionar();    
            }
        }
        
       

        function fecharVaga(){

            if (confirm("fechar vaga?") == true) {
                
                var xhr;
                var confirmar= "CONFIRM=true"

                if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                    xhr = new XMLHttpRequest();

                } else if (window.ActiveXObject) { // IE 8 and older

                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }


                xhr.open("POST", "recebe.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(confirmar);                    

            } 
                else{
                console.log("n foi ")
            }
            }
    </script>
</html>