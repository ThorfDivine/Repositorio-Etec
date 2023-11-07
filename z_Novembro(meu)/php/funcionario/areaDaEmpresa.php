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
    || $_SESSION["id"] =="" 
    || $_SESSION["id"] ==" " 
    || $_SESSION["id"] == null 
    || empty($_SESSION["id"])
    || $_SESSION['Pudim7w7'] != true)
        {header('Location: ../../html/login.html');}
    $id = $_SESSION['id'];
    $busca = mysqli_query($con,"SELECT * from empresa where cnpj = '$id'");
    $empresa = mysqli_fetch_row($busca);
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
            <link rel="stylesheet" href="../../style/areaUsuario.css">
        <!-- End -->
    <title>BartoHelp - Area do usuário</title>
</head>
<body onload="adicionar()">
    <script> var number = 0 ;</script>


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
                                <input type="text" name="nome" id="nome" class="nomeUser" <?php echo "value=".$empresa[1];?>>
                        </div>
                    </div>
                        <!--  -->
                    

                    
                    <div class="duraRealidadeDoMacgiver flexC alingCenter">
                        <div class="conteinerAll spaceEvenly wrap_True">
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="cep" class="lable marginLeft12px">Cep: </label>
                                        <br><input type="text" name="cep" id="cep" class="input" <?php echo "value=".$empresa[9];?>>
                                </div>
                                <div class="conteinerInfo">
                                    <label for="cnpj" class="lable marginLeft12px">Cnpj: </label>
                                        <br><input type="text" name="cnpj" id="cnpj" class="input" <?php echo "value=".$empresa[0];?>>
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="cep" class="lable marginLeft12px">Email: </label>
                                        <br><input type="email" name="email" id="email" class="input" <?php echo "value=".$empresa[2];?>>
                                </div>
                                <div class="conteinerInfo">
                                    <label for="fone" class="lable marginLeft12px">Telefone: </label>
                                        <br><input type="tel" name="fone" id="fone" class="input" <?php echo "value=".$empresa[4];?>>
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="desc1" class="lable marginLeft12px">Descrição <i style="font-size: .58rem;">(1 linha) </i>: </label>
                                        <br><input type="text" name="desc1" id="desc1" class="input" <?php echo "value=".$empresa[7];?>>
                                </div>
                                <div class="conteinerInfo">
                                    <label for="desc2" class="lable marginLeft12px">Descrição <i style="font-size: .58rem;">(paragrafo) </i>: </label>
                                        <br><textarea name="desc2" id="desc2" class="input"><?php echo $empresa[6];?></textarea>
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="senha" class="lable marginLeft12px">Senha: </label>
                                        <br><input type="password" name="pass" id="senha" class="input senhas" <?php echo "value=".base64_decode($empresa[1]);?>>
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
                <div class="editar" id="editar">
                    <span class="material-symbols-outlined"> edit_square </span>
                    <h4>Editar</h4>
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
    <script src="../../js/infoEdit.js"></script>
    <script src="../../js/createBttn.js"></script>
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


                xhr.open("POST", "../../php/AareadeUserEmp.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            //alert(xhr.responseText);	 
                            
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
        function add(){
            if(number>=0 && items != "<h2>sem mais resultados...</h2>"){
                number+=6;
                window.scrollTo(0, 0);
                adicionar();    
            }
        }
        function rmv(){
            if(number>0){
                number-=6;
                window.scrollTo(window.scrollY, 0);
                adicionar();    
            }
        }
        
       

        function fecharVaga(idVaga){

            if (confirm("fechar vaga?") == true) {
                
                var xhr;
                var confirmar= "idVaga="+idVaga;

                if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                    xhr = new XMLHttpRequest();

                } else if (window.ActiveXObject) { // IE 8 and older

                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }


                xhr.open("POST", "../desativarVaga.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(confirmar);  
                xhr.onreadystatechange = window.location.reload();                  

            } 
                else{
                console.log("n foi ")
            }
        }

        function reativarVaga(idVaga){
            if (confirm("reativar vaga?") == true) {

                var xhr;
                var confirmar= "idVaga="+idVaga;

                if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                    xhr = new XMLHttpRequest();

                } else if (window.ActiveXObject) { // IE 8 and older

                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }


                xhr.open("POST", "../reativarVaga.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(confirmar);   
                xhr.onreadystatechange = window.location.reload();

            } 
                else{
                console.log("n foi ")
            }
        }
    </script>
</html>