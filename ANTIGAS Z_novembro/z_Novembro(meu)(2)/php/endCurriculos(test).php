
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BartoHelp - Currículos</title>
        <!-- Fav-Icon -->
            <link rel="shortcut icon" href="../../contents/favIcon/favicon.ico" type="image/x-icon">
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
            <link rel="stylesheet" href="../../style/endCurriculos.css">
        <!-- End -->
</head>
<body>
    <header id="top"></header>

    <section class="flexC spaceBetween alingCenter bigMarginBotom">

        <div style="width: 100%; height: 5vh; color: rgb(60,60,60);" class="centralize">
            <h2>Quase acabando!</h2>
        </div>

        <div class="form flex marginBtm23px" style="margin-bottom: 45px;">
            <form action="#" class="curriculo flexC" method="post">
                <div class='flexR w100prc spaceAround'>
                    <div class="flexC conteiner_item" style="width: 40%;">
                        <div class="flexR marginBtm5px">
                            <label for="experiencias" class="lable">Experiencias: </label>
                        </div>
                        <div class="flexR alingCenter experiencias" style="width: 100%;">
                            <input type="text" name="experiencias" id="experiencias" class="inputPattern noMarginBottom">
                                <span class="material-symbols-outlined add">add</span>
                        </div>
                    </div>
                    <div class="flexC conteiner_item" style="width: 40%;">
                        <div class="flexR marginBtm5px">
                            <label for="idiomas" class="lable">Idiomas: </label>
                        </div>
                        <div class="flexR alingCenter experiencias" style="width: 100%;">
                            <input type="text" name="idiomas" id="idiomas" class="inputPattern noMarginBottom">
                                <span class="material-symbols-outlined add">add</span>
                        </div>
                    </div>
                </div>
                <div class="competencias w100prc centralize marginTop23px marginBtm23px">
                    <div class="flexC alingCenter spaceEvenly" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Nome da Competência</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">

                            <!-- Use o ajax//php pra deixar o id da competência nesse h2 -->

                                <h2>16</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>detalhes da competência: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum consectetur adipisicing elit.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint" id="u"></div> <!--  u m     -->
                                    <div class="redPoint" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>
                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="centralize marginTop23px">
                    <input type="submit" value="Gerar Currículo" class="buttonPattern" style="width: 20%; height: 50px;">
                </div>
            </form>
        </div>

        <div></div>
    </section>

    <a href="#top">
        <div id="backTop" class="backTop">
            <div class="aqui" id="aqui" style="display: none;"></div>
        </div>
    </a>

    <footer></footer>
</body>
<script>
    // criando váriaveis conteiner -> Classificação de competência
    let c1; let c2; let c3; let c4; let c5; let c6; let c7; let c8; let c9; let c10; let c11; let c12; let c13; let c14; let c15; let c16
        c1 = 0; c2 = 0; c3 = 0; c4 = 0; c5 = 0; c6 = 0; c7 = 0; c8 = 0; c9 = 0; c10 = 0; c11 = 0; c12 = 0; c13 = 0; c14 = 0; c15 = 0; c16 = 0

    var valorCompetencias = [c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13, c14, c15, c16]

</script>
    <script src="../../js/endCurriculo.js"></script>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/createBttn.js"></script>
</html>


<!-- 


                        <div class="flexC conteiner_item">
                            <div class="flexR marginBtm5px">
                                <label for="idiomas" class="lable">Idiomas: </label>
                            </div>
                            <div class="flexR alingCenter experiencias">
                                <input type="text" name="idiomas" id="idiomas" class="inputPattern noMarginBottom">
                                    <span class="material-symbols-outlined add">add</span>
                            </div>
                        </div>

 -->