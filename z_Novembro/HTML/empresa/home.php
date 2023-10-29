<?php
session_start();

    if (!isset($_SESSION["id"]) || $_SESSION["id"] =="" || $_SESSION == null || !isset($_SESSION['id']) || empty($_SESSION)) {
    echo "<script> alert(\" deslogado \"); window.location.href =  ../login.html </script>";
    }
    if(
        !isset($_SESSION) 
        && isset($_SESSION)
        || $_SESSION =="" 
        || $_SESSION == null 
        || !isset($_SESSION['id']) 
        ||  $_SESSION['id'] =="" 
        || $_SESSION['id'] == null 
        || empty($_SESSION['id']))
            {header('Location: ../../html/login.html');}
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
            <link rel="stylesheet" href="../../style/home.css">
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/home_empresa.css">
        <!-- End -->
    <title>BartoHelp - Empresa</title>
</head>
<body onload="adicionar()">
    
    <script> var number = 0 ;</script>
    <header id="topo"></header>

    <section class="bigMarginTop">
        <div class="vagasAceitas">

            <div class="conteinerH2">
                <h2>Vagas Anunciadas</h2>
            </div>
            <div id="vagas">
                
            </div>
            

        </div>
        <div class="middleLine">
            <!-- ==================================================================================================== -->
        </div>
        <div class="vagasDisponiveis">

            <div class="conteinerH2">
                <h2>Currículos Disponiveis</h2>
            </div>
            <div class="curricolos" id="curriculos">

            </div>
            
            
        </div>
    </section>
    <div class="backTop bigMarginBotom spaceAround">
        <div></div>
        <div></div>
        <a href="#topo"><button>Mostrar mais</button></a>
    </div>
    
    <footer>
    </footer>
    
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/confirmDelet.js"></script>
    <script>
    
    var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

    function adicionar()
        {
            var data = "n=" + number;
            
            


                xhr.open("POST", "../../php/Ahome.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            
                                items = xhr.responseText;
                            
                                document.getElementById('vagas').innerHTML = items ; 
                                    
                                console.log("number="+number);
                            

                        } else {

                            alert('There was a problem with the request.');

                        }
                    }
                }

            //limit sql
        }
        function verCurriculos(idVaga){
                var data = "n=" + number;
                xhr.open("POST", "../../php/Acurriculos.php?idVaga="+idVaga, true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            
                                items = xhr.responseText;
                            
                                document.getElementById('curriculos').innerHTML = items ; 
                                    
                                console.log("number="+number);
                            

                        } else {

                            alert('There was a problem with the request.');

                        }
                    }
                }
        }
        function dispensar(cpf) {

                xhr.open("POST", "../../php/dispensar.php?cpf="+cpf, true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = recarregarAPagina();

                
        }
        function recarregarAPagina(){
            window.location.reload();
        }
    </script>
</html>