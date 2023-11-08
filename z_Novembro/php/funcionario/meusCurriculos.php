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
        <link rel="shortcut icon" href="../contents/favIcon/favicon.ico" type="image/x-icon">
    <!-- end -->
    
    <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- End -->
        <!-- ==================================================================================== -->
    <!-- CSS -->
        <link rel="stylesheet" href="../../style/style.css">
        <link rel="stylesheet" href="../../style/header.css">
        <link rel="stylesheet" href="../../style/meusCurriculos.css">
    <!-- End -->
</head>
<body>
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
 
   
        <div class="vagas">
            <div class="titulo alingCenter">
                <h2 class="marginLeft12px">Competencias: </h2>
            </div>
            
        </div>
 
    </section>
 
    <footer></footer>
 
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
</html>

<?php } ?>