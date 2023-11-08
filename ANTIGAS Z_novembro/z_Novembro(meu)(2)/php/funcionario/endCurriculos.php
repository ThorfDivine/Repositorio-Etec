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
    
    ){header('Location: ../../html/login.html');}  ?>
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
<body >
    <script>var number = 1; </script>
    <header id="top"></header>

    <section class="flexC spaceBetween alingCenter bigMarginBotom">

        <div style="width: 100%; height: 5vh; color: rgb(60,60,60);" class="centralize">
            <h2>Quase acabando!</h2>
        </div>

        <div class="form flex marginBtm23px" style="margin-bottom: 45px;">
           
                <div class='flexR w100prc spaceAround'>
                    <div class="flexC conteiner_item" style="width: 40%;">
                        <div class="flexR marginBtm5px">
                            <label for="experiencias" class="lable">Experiencias: </label>
                        </div>
                        <div class="flexR alingCenter experiencias" style="width: 100%;">
                            <input type="text" name="experiencias" id="experiencias" class="inputPattern noMarginBottom">
                                <span class="material-symbols-outlined add" onclick="adicionarExperiencia()">add</span>
                        </div>
                    </div>
                    <div class="flexC conteiner_item" style="width: 40%;">
                        <div class="flexR marginBtm5px">
                            <label for="idiomas" class="lable">Idiomas: </label>
                        </div>
                        <div class="flexR alingCenter experiencias" style="width: 100%;">
                            <input type="text" name="idiomas" id="idiomas" class="inputPattern noMarginBottom">
                                <span class="material-symbols-outlined add" onclick="adicionarLingua()">add</span>
                        </div>
                    </div>
                </div>
                
                <div class="competencias w100prc centralize marginTop23px marginBtm23px" id="containerComp">

                    <!-- 1 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Planejamento</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>1</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>Esta competência está relacionada à capacidade de pensar no futuro.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="um">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Flexibilidade</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>2</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>Significa estar aberto a novas ideias e apto a responder prontamente por mudanças.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="dois">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Adaptabilidade</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>3</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>Pode ser definida como a capacidade de se adaptar a novas situações, circunstâncias e necessidades.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="tres">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Comunicação</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>4</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>É ter a capacidade de se expressar, dizer o que pensa e ter confiança ao falar e se relacionar com pessoas.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="quatro">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 5 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Persuasão</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>5</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>É o ato de convencer alguém a realizar alguma ação utilizando recursos comicacionais lógicos e racionais.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="cinco">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 6 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Tolerância</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>6</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>Se relaciona ao controle de estresse em situações difíceis, como, por exemplo, ao ouvir <i>feedbacks</i> negativos.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="seis">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 7 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Relacionamento inerpessoal</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>7</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>O relacionamento interpessoal é o processo de conhecer, interagir e criar laços com indivíduos ou um grupo.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="sete">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 8 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Autoconfiança</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>8</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>É a convicção de ser capaz de realizar algo e ter confiança nas próprias habilidades, qualidades e julgamentos.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="oito">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 9 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Criatividade</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>9</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>É ter a capacidade de de se expressar, dizer o que pena e ter confiança ao falar e se relacionar com outras pessoas.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="nove">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 10 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Liderança</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>10</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>É a habilidade de comandar, motivar, orientar e inspirar pessoas de forma positiva em direção a uma meta compartilhada.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="dez">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 11 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Determinação</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>11</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>É a capacidade de persistir em uma tarefa, mesmo quando ela é desafiadora, e de manter o foco naquilo que se deseja alcançar.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="onze">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 12 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Pensamento crítico</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>12</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>É quando, antes de ter uma reação a alguma cituação, é realizado um julgamento dos fatos para a resposta ser a melhor para a situação.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="doze">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 13 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Negociação</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>13</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>Tem a ver com capacidade diversas como comunicação eficiente e assertiva, planejamento, organização, disciplina, determinação, inovação e flexibilidade.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="treze">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 14 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Inteligência emocional</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>14</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>Trata-se de uma competência específica para identificar e gerenciar emoções, seja do próprio indivíduo ou das pessoas ao seu redor, e a capacidade de expressá-las de maneira clara e consciente.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="quatorze">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 15 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Gerenciamento de riscos</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>15</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>O gerenciamento de riscos é o processo de identificar, analisar e controlar (ou minimizar) os riscos do negócio. <br> Trata-se de, <strong>sistematicamente</strong>, avaliar as incertezas sobre o que a empresa pensa sobre o mundo — no que diz respeito ao seu mercado — e, especialmente, o futuro.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="quinze">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 16 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Organização</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>16</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>Esta habilidade permite que você use seus recursos de forma eficiente e eficaz, evitando gastos desnecessários.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="deseseis">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- 17 -->

                    <div class="flexC alingCenter spaceEvenly conteinerComp" style="width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;">
                        <div class="tittle w100prc flexR alingCenter" id="cTitle">
                            <h1>Proatividade</h1>
                        </div>

                        <div id="competenciaId" style="display: none;">


                                <h2>17</h2>

                        </div>

                            <div class="explain" id="explain">
                                <p>Geralmente, as pessoas proativas têm uma boa visão de futuro, identificando necessidades e antecipando problemas, o que confere vantagens para sua equipe e empresa.</p>
                            </div>
                        <div class="points flexC spaceBetween">
                            <p id="nivel" class="centralize" style="margin-bottom: 15px;">Nível de competência: <i style="margin-left: 5px;">0</i></p>
                            <div class="w100prc centralize" id="deseseis">
                                <div class="flexR spaceAround" style="width: 70%;">
                                    <div class="redPoint lvl" id="u"></div> <!--  u m     -->
                                    <div class="redPoint lvl" id="d"></div> <!--  d ois   -->
                                    <div class="redPoint lvl" id="t"></div> <!--  t rês   -->
                                    <div class="redPoint lvl" id="q"></div> <!--  q uatro -->
                                    <div class="redPoint lvl" id="c"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class="refresh">
                                    <span class="material-symbols-outlined" id="refresh"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <!-- end -->

                </div>

                <div class="flexR w100prc alingCenter spaceBetween">
                    <button id="back" class="mudarComp"><</button>
                    <button id="next" class="mudarComp">></button>
                </div>  

                <div class="centralize marginTop23px">
                    <input type="submit" value="Gerar Currículo" class="buttonPattern" style="width: 20%; height: 50px;">
                </div>
           
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

/*        function mostrarCompetencia(){
            var data = "idDaComp=" + number;

            var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

                xhr.open("POST", "../Acompetencia.php", true); 
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
        function adicionarLingua(){
            let nome10 = document.getElementById('idiomas').Value;
            var data = "lingua=" + nome10;

            var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

                xhr.open("POST", "../cadastrarLingua.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            
                            items = xhr.responseText;
                            
                            console.log(items);
                        } else {

                            alert('There was a problem with the request.');

                        }
                    }
                }
             
        }
        function adicionarExperiencia(){
            let nome10 = document.getElementById('experiencias').value;
            var data = "experiencia=" + nome10;

            var xhr;

            if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                xhr = new XMLHttpRequest();

            } else if (window.ActiveXObject) { // IE 8 and older

                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

                xhr.open("POST", "../cadastrarExperiencia.php", true); 
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {

                    if (xhr.readyState == 4) {

                        if (xhr.status == 200) {

                            items = xhr.responseText;
                            
                               console.log(items);
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

      */  
</script>
    <script src="../../js/endCurriculo.js" ></script>
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