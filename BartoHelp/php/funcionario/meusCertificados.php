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
    $busca = mysqli_query($con, "SELECT * from certificados where id_usuario = '$cpf'");
    $res = "";
    $vazio = 1;
    while($resultado = mysqli_fetch_row($busca)){
        $vazio = 0;
        $res = $res."
                        <div class=\"cardCertificado\">
                            <div class=\"img_conteiner\">
                                <img src=\"../../contents/imgs/paralax/paralaxUsuario2.png\" alt=\"".$resultado[0]."\">
                            </div>
                            <div class=\"cerificadoInfo flexC spaceEvenly alingCenter\">
                                <h3>certificado n°: ".$resultado[0]."</h3>
                            </div>
                        </div>
                        
                    ";
    }
    if($res == "" || $res == " " || $res ==null || $vazio =1){
        $vazio=1;
        $res= "
            <div class=\"respostaElse\" style=\"padding: 25vh\">
                <h1>Ao que parece você não possui certificados cadastrados</h1>
                <h3>Clique <a href=\"./certificados.php\">aqui</a> para iniciar sua jornada!</h3>
            </div>";
            
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

        <!-- Fav-Icon -->
            <link rel="shortcut icon" href="../contents/favIcon/favicon.ico" type="image/x-icon">
        <!-- end -->

        <!-- Material Icons -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- End -->
    <!-- ==================================================================================== -->
        <!-- CSS -->
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/home.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/certificados.css">
        <!-- End -->
    <title>BartoHelp - Meus Certificados</title>
</head>
<body>
    
    <header></header>
        <?php if($vazio == 1){echo $res;}?>
        <section class="bigMarginTop bigMarginBotom centralize">
            
            <?php if($vazio != 1 ){?>
            <div class="myCrts flexR wrap_True spaceAround">
                <?php echo $res."ainda to aqui";?>
                    
            </div>
            
        <?php }?>
        </section>
    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script>
        // ajax - Acincronismo


    </script>
</html>