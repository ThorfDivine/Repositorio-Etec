<?php 
session_start();
include('../conexao.php');
if(
    !isset($_SESSION) 
    || $_SESSION =="" 
    || $_SESSION == null 
    || !isset($_SESSION['cpf']) 
    ||  $_SESSION['cpf'] =="" 
    || $_SESSION['cpf'] == null 
    || empty($_SESSION['cpf'])
    
    ){header('Location: ../../html/login.html');}  
   
$cpf = $_SESSION['cpf'];
$curriculo = mysqli_query($con, "SELECT curriculo from usuario where cpf ='$cpf'");
$curriculo1 = mysqli_fetch_row($curriculo);
echo "<input type=\"text\" style=\"display:none\" value= \"".$curriculo1[0]."\" id=\"curriculo\"/>";
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
        <!-- End -->
    <title>BartoHelp - Candidato</title>
</head>

<body onload="both()" >
    
    <script> var number = 0 ;</script>
    <header id="topo">
    </header>

    <section>

        <!-- o maximo de cards que essa section aguenta são 6 de cada [disponiveis e inscritas] -->

        <div class="vagasAceitas" id="vagasAceitas">

            <div class="conteinerH2">
                <h2>Vagas Inscritas</h2>
            </div>

            
        </div>
            <div class="middleLine">
                <!-- ==================================================================================================== -->
            </div>
        <div class="vagasDisponiveis" id="vagas">
            
            <div class="conteinerH2">
                <h2>Vagas Disponiveis</h2>
            </div>
           

        </div>
    </section>

    <div class="mostrarMais bigMarginBotom spaceAround">
        <div></div>
        <div></div>
        <a href="#topo"><button>Mostrar mais</button></a>
    </div>

    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/confirmDelet.js"></script>
    <script>
    
    
    
    function both(){
                vagasInscritas();
                vagaspincrever_se();
    }
    function vagaspincrever_se()
        {
                var data = "n=" + number;

                var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

                xhr.open("POST", "../../php/AvagasInscreverSe.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            
                                items = xhr.responseText;
                            
                                document.getElementById('vagas').innerHTML = items ; 
                                    
                                console.log("cheguei no inscrever-se ");
                            

                        } else {

                            alert('There was a problem with the request.');

                        }
                    }
                }

            //limit sql
        }
        function inscrever_se(idVaga){
            var curriculo = document.getElementById("curriculo").value;
                if (curriculo == 1) {
                    var data = "idVaga=" + idVaga;
                
                    xhr.open("POST", "../../php/Ainscrever.php", true); 
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                    xhr.send(data);
                    xhr.onreadystatechange = display_data;
                }
                else{
                    
                    if (confirm("sem curriculo cadastrado, criar o curriculo ?") == true) {
                        
                        window.location.href = "./curriculos.php";          

                    } 
                        
                }
        }        

        function vagasInscritas(){
            var data = "n=" + number;

            var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

                xhr.open("POST", "../../php/AvagasInscritas.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            
                                items = xhr.responseText;
                            
                                document.getElementById('vagasAceitas').innerHTML = items ; 
                                    
                                console.log("cheguei nos inscritas");

                        } else {

                            alert('There was a problem with the request.');

                        }
                    }
                }
             
        }
        
        function recarregarAPagina(){
            window.location.reload();
        }
        


    </script>
</html>

