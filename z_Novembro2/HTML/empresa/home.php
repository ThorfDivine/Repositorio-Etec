<?php
session_start();
if (!isset($_SESSION) || $_SESSION =="" || $_SESSION == null) {
    header('Location: ../login.html');
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
            <link rel="stylesheet" href="../../style/home.css">
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/home_empresa.css">
        <!-- End -->
    <title>BartoHelp - Empresa</title>
</head>
<body>
    
    <header id="topo">
    </header>

    <section class="bigMarginTop">
        <div class="vagasAceitas">

            <div class="conteinerH2">
                <h2>Vagas Anunciadas</h2>
            </div>

            <div class="cardVaga">
                <div class="imgLogo img_conteiner">
                    <img src="#" alt="logo">
                </div>
                <div class="informacoes_da_vaga">
                    <p><strong>Analista de departamento</strong></p><br>
                    <div><p class="m1rem">Status: <i>Aberto</i></p> <!----> <p style="margin-left: 25px;"> | </p> <!----> <p style="margin-left: 25px;"> N° <i>inscrições</i></p></div>
                </div>
                <div class="flexC botoes">
                    <button class="lixeira"><span class="material-symbols-outlined">delete</span></button>
                    <button class="detalhes">Detalhes</button>
                </div>
                <div>
                    <div class="editar">
                        <span class="material-symbols-outlined"> edit_note </span>
                    </div>
                </div>
            </div>
            <div class="cardVaga"></div>
            <div class="cardVaga"></div>
            <div class="cardVaga"></div>
            <div class="cardVaga"></div>
            <div class="cardVaga"></div>

        </div>
        <div class="middleLine">
            <!-- ==================================================================================================== -->
        </div>
        <div class="vagasDisponiveis">

            <div class="conteinerH2">
                <h2>Currículos Disponiveis</h2>
            </div>

            <div class="cardVaga">
                <div class="imgLogo img_conteiner">
                    <img src="#" alt="logo">
                </div>
                <div class="informacoes_da_vaga vaga">
                    <p><strong>Analista de departamento</strong></p><br>
                    <div class="oferta spaceAround">
                        <div class="idade"><p><i>17</i> anos</p></div>
                        <div><p>|</p></div>
                        <div class="local"><p>São Paulo, SP</p></div>
                    </div>
                </div>
                <div class="flexC detalhes_Oferta">
                    <button>Ver Currículo</button>
                    <button class="cadastrar">Dispensar</button>
                </div>
            </div>
            <div class="cardVaga"></div>
            <div class="cardVaga"></div>
            <div class="cardVaga"></div>
            <div class="cardVaga"></div>
            <div class="cardVaga"></div>
            
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
</html>