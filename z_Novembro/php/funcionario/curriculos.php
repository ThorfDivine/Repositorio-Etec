<?php 
session_start();
if(
    !isset($_SESSION) 
    || $_SESSION =="" 
    || $_SESSION == null 
    || !isset($_SESSION['cpf']) 
    ||  $_SESSION['cpf'] =="" 
    || $_SESSION['cpf'] == null 
    || empty($_SESSION['cpf'])
    
    ){header('Location: ../../html/login.html');}  
   
include("../conexao.php");
$cpf = $_SESSION['cpf'];
$teste = mysqli_query($con, "SELECT * from escolaridade where cpf_cliente = '$cpf'"); 
if(mysqli_num_rows($teste) >=1){
    header('Location: ./endCurriculos.php');
}
$busca = mysqli_query($con, "SELECT * from usuario where cpf = '$cpf'");
$resultado = mysqli_fetch_row($busca);
$idade = calcularIdade($resultado[6]);
function calcularIdade($date){
    $time = strtotime($date);
    if($time === false){
      return '';
    }
 
    $year_diff = '';
    $date = date('Y-m-d', $time);
    list($year,$month,$day) = explode('-',$date);
    $year_diff = date('Y') - $year;
    $month_diff = date('m') - $month;
    $day_diff = date('d') - $day;
    if ($day_diff < 0 || $month_diff < 0) $year_diff;
 
    return $year_diff;

   } 
    $aumentando= date('Y');
    $anos = "";
    while ($aumentando >= 1950) {
        echo "<script>console.log(\"to aqui\")</script>";
        $anos = $anos."<option value=\"$aumentando\">$aumentando</option>";
        $aumentando--;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BartoHelp - Currículos</title>
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
            <link rel="stylesheet" href="../../style/curriculos.css">
        <!-- End -->
</head>
<body>
    <header id="top"></header>

    <section>
        <div class="form flex">
            <form action="../cadastrarCurriculo1.php" class="curriculo flexC" method="POST">
                <div class="flexR spaceEvenly">
                    <div class="left">
                        <div class="flexC conteiner_item">
                            <label for="nome" class="lable">Nome Completo: </label>
                                <input type="text" name="nome" id="nome" <?php echo "value=".$resultado[4]; ?> class="inputPattern" placeholder="ex: Nome Genérico">
                        </div>
                        <div class="flexR conteiner_item">
                            <help class="helpDropDown_0" style="display: none;">
                                <p>Apenas números</p>
                                <p>"22" <sub><span class="material-symbols-outlined"> check </span></sub></p>
                                <p>"22 anos" <sub><span class="material-symbols-outlined"> dangerous </span></sub></p>
                            </help>
                            <div class="flexC divIdade">
                                <div class="flexR">
                                    <label for="idade" class="lable">Idade: </label>
                                    <span class="material-symbols-outlined helpIcon marginLeft12px"> help </span>
                                </div>
                                    <input type="text" name="idade" id="idade" <?php echo "value=".$idade?> class="inputPattern" placeholder="ex: 22">
                            </div>
                            <div class="flexC marginLeft12px divEmail conteiner_item">
                                <label for="email" class="lable">Email: </label>
                                    <input type="text" name="email" id="email" class="inputPattern" <?php echo "value=".$resultado[0]?> placeholder="ex: exemplo@exemplo.com">
                            </div>
                        </div>
                        <div class="flexC conteiner_item">
                            <label for="Bairro&Cidade" class="lable">Bairro e Cidade: </label>
                                <input type="text" name="idade" id="idade" class="inputPattern" placeholder="ex: Cajamar - SP" <?php echo "value=".$resultado[8]?>>
                        </div>
                    </div>
                    <div class="right">
                        <div class="escolaridade flexC">
                            <div class="tipoEstudo">
                                <label for="escolatidade" class="lable">Escolaridade: </label>
                                <select name="escolaridade" id="escolaridade" class="inputPattern escolaridadeSelect">
                                    <option value="fundamentalParcial">Ensino fundamental incompleto</option>
                                    <option value="fundamental">Ensino fundamental completo</option>
                                    <option value="medioImcompleto">Ensino médio incompleto</option>
                                    <option value="medioCompleto">Ensino médio completo</option>
                                    <option value="medioTecnicoIncompleto">Ensino médio técnico Incompleto</option>
                                    <option value="medioTecnicoCompleto">Ensino médio técnico Completo</option>
                                    <option value="faculdadeIncompleta">Faculdade incompleta</option>
                                    <option value="faculdadeCompleta">Faculdade completa</option>
                                </select>
                            </div>
                            <div class="localEstudo">
                                <label for="instituicao" class="lable instituicaoLbl">Instituição: </label>
                                <input type="text" name="instituicao" id="instituicao" class="instituicao">
                            </div>
                            <div class="periodoEstudo">
                                <div class="w100prc flexR spaceAround">
                                    <div class="flexC">
                                        <label for="inicio" class="dates">Início: </label>
                                            <select name="inicio"  id="inicio" class="inicio">          
                                                <?php echo $anos;?>
                                            </select>
                                    </div>
                                    <div class="flexC">
                                        <label for="conclusao" class="dates">Conclusão: </label>
                                            <select name="conclusao" id="conclusao" class="conclusao">
                                                <option value="Em curso">Em curso</option>
                                                <?php echo $anos;?>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flexR">
                </div>
                <input type="submit" class="submitPattern" value="continuar">
            </form>
        </div>
    </section>

    <a href="#top">
        <div id="backTop" class="backTop">
            <div class="aqui" id="aqui" style="display: none;"></div>
        </div>
    </a>

    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/helpOpen.js"></script>
    <script src="../../js/createBttn.js"></script>
    <script src="../../js/yearsCheck.js"></script>
</html>

<!--        Tem que enviar via PHP para a proxima página...  (endCurriculos.php)        -->