<?php 
session_start();
include("../conexao.php");
if(
    !isset($_SESSION) 
    || $_SESSION =="" 
    || $_SESSION == null 
    || !isset($_SESSION['id']) 
    ||  $_SESSION['id'] =="" 
    || $_SESSION['id'] == null 
    || empty($_SESSION['id'])
    
    ){header('Location: ../../html/login.html');}  
    $data = $_GET['data'];
    $pieces = explode("-", $data);
    $cpf= $pieces[0];
    $idVaga = $pieces[1];

    $lista1 = "";
    $lista2 = "";
    $lista3 = "";
    $lista4 = "";

    $buscaLinguas = mysqli_query($con, "select * from idiomas where cpf_cliente = '$cpf'");
    $buscaExperiencias = mysqli_query($con, "select * from experiencia where cpf_cliente = '$cpf'");
    $buscaCompetenciasUser = mysqli_query($con, "select * from competencia_usuario where cpf_usuario = '$cpf'");
    $buscaEscolaridades = mysqli_query($con, "select * from escolaridade where cpf_cliente = '$cpf'");
    $buscaAprovacao = mysqli_query($con, "SELECT * FROM interesse WHERE id_vaga = '$idVaga' and id_usuario = '$cpf'");
    

    $buscaUsuario = mysqli_query($con, "select * from usuario where cpf = '$cpf'");

    $busca2 = mysqli_fetch_row($buscaUsuario);
    $ListaLinguas2 = mysqli_fetch_row($buscaLinguas);
    $ListaExperiencias2 = mysqli_fetch_row($buscaExperiencias);
    $ListaEscolaridades2 = mysqli_fetch_row($buscaEscolaridades);
    $ListaAprovacao2 = mysqli_fetch_row($buscaAprovacao);

    

    $cpf = $busca2[5];
    $temCur = $busca2[9];

    if($busca2[3] =="" || $busca2[3] ==" "|| $busca2[3] == null){
        $logo = "../../contents/imgs/3106921.png";
    }else{
        $logo = $busca2[3];
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
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/areaUsuario.css">
            <link rel="stylesheet" href="../../style/curriculoUser.css">

        <!-- End -->
    <title>BartoHelp - Empresa</title>
</head>
<body>
   
    <header></header>

        

    <section class="bigMarginTop bigMarginBotom flexR spaceAround wrap_True">
        <div class="userDiv">
            <div class="paralaxLayout bgk_prlx">
            </div>
            <div class="userInfo flexR">
                <div class="profilePicture img_conteiner">
                    <img src="<?php echo $logo; ?>" alt="">
                </div>
                <div class="infos">
                    <div class="userName">
                        <h1 id="userName"><?php echo $busca2[4]; ?></h1>
                    </div>
                    <div class="userInfos">
                        <p><?php echo $busca2[7]; ?> - <?php echo $busca2[5]; ?> - <?php echo $busca2[0]; ?> <br> Telefone: +55 11 <?php echo $busca2[2]; ?></p>
                    </div>
                </div>
            </div>
        </div>
            <!-- User card end -->
            <div class="botoesDeAprovacao">
                <?php 
                    if($ListaAprovacao2[4] == 1){?>
                        <button class="aprovado">
                            aprovado!       
                        </button>

                        <button class="dispensar" <?php echo "onclick=\"dispensar( $cpf, $idVaga)\" ";?>>
                                dispensar        
                        </button>
                    <?php }else{ ?>

                    
                        <button class="aprovar" <?php echo "onclick=\"aprovar($cpf, $idVaga)\" ";?>>
                                aprovar        
                        </button>

                        <button class="dispensar" <?php echo "onclick=\"dispensar( $cpf, $idVaga)\" ";?>>
                                dispensar        
                        </button>
                    <?php } ?>
        </div>
        <div class="sobre">
            <div class="titulo alingCenter">
                <h2 class="marginLeft12px">Linguas: </h2>
            </div>
            <div class="contentP">
                <?php 
                        if(mysqli_num_rows($buscaLinguas) > 0 && $ListaLinguas2[2] != "" && $ListaLinguas2[2] != " "){             
                            $lista1 = $lista1."<p>".$ListaLinguas2[2]."</p> <br/>"; 
                            while($ListaLinguas = mysqli_fetch_row($buscaLinguas)){

                                $lista1 = $lista1."<p>".$ListaLinguas[2]."</p> <br/>"; 
                            }
                            echo $lista1;
                        }
                        else
                        {
                            
                            echo "<p> nenhum idioma.. </p>";
                        }
                    ?>
            </div>
        </div>
        <div class="sobre">
            <div class="titulo alingCenter">
                <h2 class="marginLeft12px">Experiencias: </h2>
            </div>
            <div class="contentP">
                <p><?php 
                        if(mysqli_num_rows($buscaExperiencias) >0 && $ListaExperiencias2[4] != "" && $ListaExperiencias2[4] != " "){             
                            $lista2 = "<p>".$ListaExperiencias2[4]."</p> <br/>";
                            while($ListaExperiencias = mysqli_fetch_row($buscaExperiencias)){
                                
                                $lista2 = $lista2."<p>".$ListaExperiencias[4]."</p> <br/>"; 
                            }
                            echo $lista2;
                        }
                        else
                        {
                            echo "<p> nenhuma experiencia.. </p>";
                        }
                    ?></p>
            </div>
        </div>
        <div class="sobre">
            <div class="titulo alingCenter">
                <h2 class="marginLeft12px">Escolaridade: </h2>
            </div>
            <div class="contentP">
                <?php 
                         if(mysqli_num_rows($buscaEscolaridades) >0 && $ListaEscolaridades2[4] != "" && $ListaEscolaridades2[4] != " "){             
                            $lista3 = " <p>instituição: ".$ListaEscolaridades2[2]."</p> <br/>
                                            <p>tipo: ".$ListaEscolaridades2[3]."</p> <br/>
                                            <p>data de inicio: ".$ListaEscolaridades2[5]."</p> <br/>
                                            <p>data de conclusão: ".$ListaEscolaridades2[6]."</p> <br/>"; 
                           
                            while($ListaEscolaridades = mysqli_fetch_row($buscaEscolaridades)){
                                echo "<script>console.log('cheguei aqui2')</script>";
                                $lista3 = $lista3.
                                           "<p>instituição: ".$ListaEscolaridades[2]."</p> <br/>
                                            <p>tipo: ".$ListaEscolaridades[3]."</p> <br/>
                                            <p>data de inicio: ".$ListaEscolaridades[5]."</p> <br/>
                                            <p>data de conclusão: ".$ListaEscolaridades[6]."</p> <br/>"; 
                            }
                            
                            echo $lista3;
                        }
                        else
                        {
                            echo "<script>console.log('cheguei aqui 3, ".$ListaExperiencias2[4]."')</script>";
                            echo "<p> nenhum idioma.. </p>";
                        }
                    ?>
                    
            </div>
        </div>
 
   
        <div class="vagas" id="containerComp">
            
            
        </div>
        <div style="display: flex; align-items: center;justify-content: center;width:100%">
            <button onclick="addd()" style=""><</button>
            <button onclick="rmvv()" style="">></button>
        </div>
 
    </section>
 
    <footer></footer>
 
</body>
    <script>
        var number = 1;
        function mostrarCompetencia(){
            var data = "idDaComp=" + number;

            var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

                xhr.open("POST", "../Acomp.php?cpf=<?php echo $cpf; ?>", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            
                                items = xhr.responseText;
                            
                                document.getElementById('containerComp').innerHTML = items ; 
                                console.log(number);
                        } else {

                            alert('There was a problem with the request.');

                        }
                    }
                }
        }
        function addd(){
            if(number==17){
                number = 1;
            }else{
                number++;
            }
            
            mostrarCompetencia();
        }
        function rmvv(){
            if(number==1){
                number = 17;
            }else{
                number--;
            }
            
            mostrarCompetencia();
        }
    
   
        function dispensar(cpf, data) {
            var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
            let data2 = "post="+data;
            xhr.open("POST", "../../php/dispensar.php?cpf="+cpf, true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
            xhr.send(data2);
            xhr.onreadystatechange = display_data;

            function display_data() {

                if (xhr.readyState == 4) {

                    if (xhr.status == 200) {

                        header('location: ./home.php');                                
                        

                    } else {

                        alert('There was a problem with the request.');

                    }
                }
            }

        }
        function aprovar(cpf, data) {
            var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

            let data2 = "post="+data;
            xhr.open("POST", "../../php/aprovar.php?cpf="+cpf, true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
            xhr.send(data2);
            xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            
                                items2 = xhr.responseText;
                            
                                console.log(items2);
                                    
                            

                        } else {

                            alert('There was a problem with the request.');

                        }
                    }
                }

        }
    mostrarCompetencia();
    </script>                    
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
</html>
