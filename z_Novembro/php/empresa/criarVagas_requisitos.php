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
            <link rel="stylesheet" href="../../style/criarVagas.css">
            <link rel="stylesheet" href="../../style/requisitos.css">
            <!-- End -->
    <title>BartoHelp - Requisitos</title>
</head>
<body>
    
    <section class="bigMarginBotom flexC spaceAround alingCenter">

        <div class="conteiner flexC spaceEvenly alingCenter">
            <div class="marginBtm23px fontRaleway almost" style="color: rgb(43, 43, 43);">
                <h1> Quase acabando! </h1>
                    <br>
                <h3> Selecione as hablidades que todo canditado deveria ter para essa vaga: </h3>
            </div>
        </div>

    <form action="#" class="flexC spaceAround">
            <div class="conteiner_form flexR centralize">
                <div class="conteiner">
                    <label for="habilidades" class="lable Habili_fontLow">Competências Requisitadas:</label>
                    <input type="button" value="Adicionar" id="habilidadesBtn" class="btnAdicionar">

                    <select name="habilidades" id="habilidades" class="inputPattern">
                        <option value="lider">Liderança</option>
                        <option value="persuasao">Persuasão</option>
                        <option value="tolerancia">Tolerância</option>
                        <option value="negociacao">Negociação</option>
                        <option value="Comunicacao">Comunicação</option>
                        <option value="proatividade">Proatividade</option>
                        <option value="planejamento">Planejamento</option>
                        <option value="determinacao">Determinação</option>
                        <option value="Criatividade">Criatividade</option>
                        <option value="flexibilidade">Flexibilidade</option>
                        <option value="autoconfiança">Autoconfiança</option>
                        <option value="adaptabilidade">Adaptabilidade</option>
                        <option value="pensamento">Pensamento crítico</option>
                        <option value="intEmocional">Inteligência emocional</option>
                        <option value="inerpessoal">Relacionamento inerpessoal</option>
                        <option value="gerenciamentoRscs">Gerenciamento de riscos</option>
                    </select>
                </div>
            </div>
            <div class="spaceEvenly">
                <div>
                    <input type="button" id="clear" value="Limpar registro" class="buttonPattern">
                </div>
                <div id="btnSbmtCntnr">
                    <a id="enviarA"><input type="button" id="enviar" value="Concluir" class="buttonPattern"></a>
                </div>
            </div>
        </form>

    </section>

<div class="w100prc flexC alingCenter">
    <div class="h3Div h3 flexR marginBtm23px">
        <h3>Itens selecionados:</h3>
        <a href="../HTML/competencias.html" target="_blank"><span class="material-symbols-outlined helpIcon" id="helpIcon">help</span></a>
    </div>

<div class="selecionados_Conteiner flexR marginTop23px bigMarginBotom">
    <div class="selecionados flexC">
        <div>
            <h2>Liderança</h2>
            <div class="explain">
                <p>Agr é só pegar do banco! <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, incidunt pariatur qui facilis a quibusdam beatae impedit itaque ab rerum at?</p>
            </div>
        </div>
    </div>
</div>

    <footer></footer>

</body>
<script src="../../js/footer.js"></script>
</html>

<!-- <?php



?> -->