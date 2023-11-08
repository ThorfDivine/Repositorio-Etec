<?php 
session_start();
include("../conexao.php");
if(
    !isset($_SESSION) 
    || $_SESSION =="" 
    || $_SESSION == null 
    || $_SESSION == " "
    && isset($_SESSION)
    || !isset($_SESSION["id"]) 
    || $_SESSION["cpf"] =="" 
    || $_SESSION["cpf"] ==" " 
    || $_SESSION["cpf"] == null 
    || empty($_SESSION["cpf"])
    || $_SESSION['Pudim7w7'] != true)
        {header('Location: ../../html/login.html');}
    $id = $_GET['id'];
    $cpf = $_SESSION['cpf'];
    $busca = mysqli_query($con,"SELECT * from empresa where cnpj = '$id'");
    $empresa = mysqli_fetch_row($busca);
    $curriculo = mysqli_query($con, "SELECT curriculo from usuario where cpf ='$cpf'");
    $curriculo1 = mysqli_fetch_row($curriculo);
    echo "<input type=\"text\" style=\"display:none\" value= \"".$curriculo1[0]."\" id=\"curriculo\"/>";
    
    if($empresa[5] =="" || $empresa[5] ==" "){
        $logo = "../../contents/imgs/3106921.png";
    }else{
        $logo = $empresa[5];
    }
    
    ?>

<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fav-Icon -->
            <link rel="shortcut icon" href="../../contents/favIcon/favicon.ico" type="image/x-icon">
        <!-- end -->
        
        <!-- Material Icons -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>    
        <!-- End -->
    <!-- ==================================================================================== -->
        <!-- CSS -->
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/home.css">
            <link rel="stylesheet" href="../../style/areaUsuario.css">

        <!-- End -->
    <title>BartoHelp - Area do usuário</title>
</head>
<body onload="vagas()">
    <script> var number = 0 ;</script>


    <!-- style="display: none;" -->
    
    <header id="top"></header>

    <section class="bigMarginTop bigMarginBotom flexR spaceAround wrap_True">
        <div class="userDiv">
            <div class="paralaxLayout bgk_prlx">
            </div>
            <div class="userInfo flexR">
                <div class="profilePicture img_conteiner">
                    <img src="<?php echo $logo?>" alt="">
                </div>
                <div class="infos">
                    <div class="userName">
                        <h1 id="userName"><?php echo $empresa[1];?></h1>
                    </div>
                    <div class="userInfos">
                        <p><?php echo $empresa[9];?> - <?php echo $empresa[0];?> - <?php echo $empresa[2];?> <br> Telefone: +55 11 <?php echo $empresa[4];?></p>
                    </div>
                </div>
            </div>
        </div>
            <!-- User card end -->

        <div class="sobre">
            <div class="titulo alingCenter">
                <h2 class="marginLeft12px">Sobre: </h2>
            </div>
            <div class="contentP">
                <p><?php echo $empresa[6];?></p>
            </div>
        </div>

        <div class="vagas" id="vagas";>
            <div class="titulo alingCenter">
                <h2 class="marginLeft12px">Vagas Anunciadas: </h2>
            </div>
            <div class="contentVagas flexR spaceEvenly wrap_True">
                
            </div>
        </div>

    </section>

        <a href="#top">
            <div id="backTop" class="backTop">
            </div>
        </a>

    <footer></footer>

</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/createBttn.js"></script>
    <script src="../../js/confirmDelet.js"></script>
    <script>
            var items = "";  
        
        

        
    function vagas()
        {
                var data = "n=" + number;

                var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

                xhr.open("POST", "../../php/AareadeUserEmp.php?id=<?php echo $id;?>", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            
                                items1 = xhr.responseText;
                            
                                document.getElementById('vagas').innerHTML = items1 ; 
                                    
                            

                        } else {

                            alert('There was a problem with the request.');

                        }
                    }
                }

            //limit sql
        }
            function inscrever_se(idVaga){

                var xhr;

                if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                    xhr = new XMLHttpRequest();

                } else if (window.ActiveXObject) { // IE 8 and older

                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }

                var curriculo = document.getElementById("curriculo").value;

                if (curriculo == 1) {
                    var data = "idVaga=" + idVaga;
                
                    xhr.open("POST", "../../php/Ainscrever.php", true); 
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                    xhr.send(data);
                    xhr.onreadystatechange = recarregarAPagina();

                    
                    
                }
                else{
                    
                    if (confirm("sem curriculo cadastrado, criar o curriculo ?") == true) {
                        
                        window.location.href = "./curriculos.php";          

                    } 
                        
                }
        }        

        
        function cancelar(idVaga){
            
            var data = "idVaga=" + idVaga;         

            var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xhr.open("POST", "../Acancelar.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
            xhr.send(data);
            xhr.onreadystatechange = recarregarAPagina();
        
                
}

        function recarregarAPagina(){
            window.location.reload();
        }
        
        function add(){
            if(number>=0 && items1 != "<div class=\"respostaElse\"><h1>Ao que parece não existem anúncios de vagas</h1></div>"){
                console.log(items1)
                number+=6;
                window.scrollTo(0, 0);
                vagaspincrever_se();    
            }
        }
        function rmv(){
            if(number>0){
                number-=6;
                window.scrollTo(window.scrollY, 0);
                vagaspincrever_se();    
            }
        }
        
       

        
    </script>
</html>