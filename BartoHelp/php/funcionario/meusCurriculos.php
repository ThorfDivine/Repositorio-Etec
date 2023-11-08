<?php 
session_start();
include("../conexao.php");
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

    $lista1 = "";
    $lista2 = "";
    $lista3 = "";
    $lista4 = "";

    $buscaLinguas = mysqli_query($con, "select * from idiomas where cpf_cliente = '$cpf'");
    $buscaExperiencias = mysqli_query($con, "select * from experiencia where cpf_cliente = '$cpf'");
    $buscaCompetenciasUser = mysqli_query($con, "select * from competencia_usuario where cpf_usuario = '$cpf'");
    $buscaEscolaridades = mysqli_query($con, "select * from escolaridade where cpf_cliente = '$cpf'");

    $buscaUsuario = mysqli_query($con, "select * from usuario where cpf = '$cpf'");

    $busca2 = mysqli_fetch_row($buscaUsuario);
    $ListaLinguas2 = mysqli_fetch_row($buscaLinguas);
    $ListaExperiencias2 = mysqli_fetch_row($buscaExperiencias);
    $ListaEscolaridades2 = mysqli_fetch_row($buscaEscolaridades);

    $id = $_SESSION['cpf'];
    $busca = mysqli_query($con,"SELECT * from usuario where cpf = '$id'");
    $empresa = mysqli_fetch_row($busca);

    if($empresa[4] =="" || $empresa[4] ==" "){
        $logo = "../../contents/imgs/3106921.png";
    }else{
        $logo = $empresa[4];
    }

    $cpf = $busca2[5];
    $temCur = $busca2[9];

    if($busca2[3] =="" || $busca2[3] ==" "|| $busca2[3] == null){
        $logo = "../../contents/imgs/3106921.png";
    }else{
        $logo = $busca2[3];
    }

    if($temCur == 0){           
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BartoHelp - Meus Currículos</title>
    <!-- Fav-Icon -->
        <link rel="shortcut icon" href="../../contents/favIcon/favicon.ico" type="image/x-icon">
    <!-- end -->
    
    <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- End -->
        <!-- ==================================================================================== -->
    <!-- CSS -->
        <link rel="stylesheet" href="../../style/style.css">
        <link rel="stylesheet" href="../../style/header.css">
        <link rel="stylesheet" href="../../style/meusCurriculos.css">
        <link rel="stylesheet" href="../../style/areaUsuario.css">
    <!-- End -->
</head>
<body>

    <script>var number = 1; </script>
    <header></header>
    
    <section class="bigMarginTop bigMarginBotom centralize">
        <div class="respostaElse">
            <!-- Essa div só deve ser criada (junto ao seu conteúdo) caso não haja currículos 
                 cadastrados previamente pelo usuário, estes cujo, registrados no banco de dados -->
            <h1>Ao que parece você não possui currículos cadastrados</h1>
            <h3>Clique <a href="./curriculos.php">aqui</a> para iniciar sua jornada!</h3>
        </div>
        
        <div class="vagas">

        </div>
</section>

    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
</html>

<?php }else{?> 

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
        <!-- End -->
    <title>BartoHelp - Candidato</title>
</head>
<body>
   
                <!-- style="display: none;" -->
                <popup>
        <div class="conteiner flexC">
            <!-- close div -->
            <div class="close spaceBetween">
                <div></div>

                <div id="close">
                    <p>X</p>
                </div>
            </div>
            <!-- end close div -->

            <!-- form div -->
            <div class="form flexC">
                <form action="../updateinfoEmp.php" method="post" class="flexR wrap_True">
                    <div class="topConteiner w100prc spaceEvenly">
                        <div class="conteinerInfo">
                            <label for="logotipo" class="lable">Logotipo atual:</label>
                            <div class="flexR alingCenter">
                                <div class="profilePicture_edite img_conteiner">
                                    <img src="<?php echo $logo;?>" alt="Foto de perfil">
                                </div>
                                <div class="editarImg">
                                    <label for="logotipo" class="alterar flexC alingCenter">
                                        <span class="material-symbols-outlined">edit</span> Alterar
                                    </label>
                                    <input id="img3" type="file" name="logo" accept="image/*" id="logotipo" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="conteinerInfo flexC">
                            <label for="nome" class="lable">Nome da empresa:</label>
                                <input type="text" name="nome" id="nome" class="nomeUser" <?php echo "value=".$busca2[5];?>>
                        </div>
                    </div>
                        <!--  -->
                    

                    
                    <div class="duraRealidadeDoMacgiver flexC alingCenter">
                        <div class="conteinerAll spaceEvenly wrap_True">
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="cep" class="lable marginLeft12px">Cep: </label>
                                        <br><input type="text" name="cep" id="cep" class="input" <?php echo "value=".$empresa[8];?>>
                                </div>
                                <div class="conteinerInfo">
                                    <label for="cnpj" class="lable marginLeft12px">Cnpj: </label>
                                        <br><input type="text" name="cnpj" id="cnpj" class="input" <?php echo "value=".$empresa[6];?>>
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="cep" class="lable marginLeft12px">Email: </label>
                                        <br><input type="email" name="email" id="email" class="input" <?php echo "value=".$empresa[1];?>>
                                </div>
                                <div class="conteinerInfo">
                                    <label for="fone" class="lable marginLeft12px">Telefone: </label>
                                        <br><input type="tel" name="fone" id="fone" class="input" <?php echo "value=".$empresa[3];?>>
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="desc1" class="lable marginLeft12px">Descrição <i style="font-size: .58rem;">(1 linha) </i>: </label>
                                        <br><input type="text" name="desc1" id="desc1" class="input">
                                </div>
                                <div class="conteinerInfo">
                                    <label for="desc2" class="lable marginLeft12px">Descrição <i style="font-size: .58rem;">(paragrafo) </i>: </label>
                                        <br><textarea name="desc2" id="desc2" class="input"></textarea>
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="senha" class="lable marginLeft12px">Senha: </label>
                                        <br><input type="password" name="pass" id="senha" class="input senhas" <?php echo "value=".base64_decode($empresa[2]);?>>
                                </div>
                                <div class="conteinerInfo">
                                    <label for="confirm" class="lable marginLeft12px">Confirme sua senha: </label>
                                        <br><input type="password" name="confirm" id="confirm" class="input senhas" >
                                </div>
                            </div>
                            <div class="w100prc centralize">
                                <div class="flexC alingCenter">
                                    <span class="material-symbols-outlined" id="eye"> visibility_off </span> <!-- Eye -->
                                    <br><p id="text_eye" style="font-size: 1rem;">Mostrar senhas</p>
                                </div>
                            </div>

                        </div>
                        <div class="marginTop23px centralize">
                            <input type="button" class="buttonPattern btnBlocked" value="...">
                        </div>
                    </div>
                
                </form>
            </div>
            <!-- form end -->
        </div>
    </popup>

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
                <div class="editar" id="editar">
                        <span class="material-symbols-outlined"> edit_square </span>
                        <h4>Editar</h4>
                    </div>
            </div>
        </div>
            <!-- User card end -->
 
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
        <div class="sobre escolaridade">
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
 
   
        <div class="vagas competencias" id="containerComp">
            
        </div>
        <div style="display: flex; align-items: center;justify-content: center;width:100%">
            <button onclick="addd()" style=""><</button>
            <button onclick="rmvv()" style="">></button>
        </div>
 
    </section>

        <a href="#top">
            <div id="backTop" class="backTop">
            </div>
        </a>
 
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
    
   

    mostrarCompetencia();

    </script>                    
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/infoEdit.js"></script>
    <script src="../../js/createBttn.js"></script>
    <!-- <script src="../../js/largura.js"></script> -->
</html>

<?php } ?>