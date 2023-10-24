<?php
    session_start();
    include("../conexao.php");
    if(!isset($_SESSION) || $_SESSION =="" || $_SESSION == null){header('Location: ../../html/login.html');}
    
    $id_vaga = $_GET['id'];
    echo "<input type=\"text\" style=\"display:none\" value=\"$id_vaga\" id=\"IdVaga\"/> $id_vaga";



        $busca = mysqli_query($con, "SELECT * from competencia_vaga where id_vaga = '$id_vaga'");
        $res = "";
        

        

?>

<script>var items="";</script>

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
                        <option value="1">Comunicação</option>
                        <option value="2">Criatividade</option>
                        <option value="3">Pensamento crítico</option>
                        <option value="4">Flexibilidade</option>
                        <option value="5">Autoconfiança</option>
                        <option value="6">Liderança</option>
                        <option value="7">Planejamento</option>
                        <option value="8">Organização</option>
                        <option value="9">Proatividade</option>
                        <option value="10">Negociação</option>
                        <option value="11">Determinação</option>
                        <option value="12">Tolerância</option>
                        <option value="13">Persuasão</option>
                        <option value="14">Adaptabilidade</option>
                        <option value="15">Relacionamento inerpessoal</option>
                        <option value="16">Inteligência emocional</option>
                        <option value="17">Gerenciamento de riscos</option>
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

<div class="selecionados_Conteiner flexR marginTop23px bigMarginBotom" id="selecionados"></div>

    <footer></footer>


</body>
<?php 
        
        if (!empty($busca2) || !$busca2 || $busca2 != "" || $busca2 != null){
            
            $res = "";
            $resultado;
            while ($res=mysqli_fetch_row($busca)) {
                
                $id_competencia = $res[0];
                $busca2 = mysqli_query($con, "SELECT * from  competencia where id_competencia = '$id_competencia'");

                while($resultado = mysqli_fetch_row($busca2)){
                    $res = $res."<div class=\"selecionados flexC\"><div id=\"containerRequisitos\"><h2>".$resultado[1]."</h2><div class=\"explain\"><p>".$resultado[2]."</p></div></div></div>

                    <script>console.log(\"entrei no while do php\")</script>";

                    $idRes = $resultado[0]; 

                    echo 
                    "<input type=\"text\" style=\"display:none\" value='$res' id=\"reses\"/>
                    <script>

                        var valor = document.getElementById('reses').value;
                        document.getElementById('selecionados').innerHTML = valor; 
                        var habilidades = document.getElementById(\"habilidades\");
                        if(habilidades.options[habilidades.selectedIndex].value==$idRes){
                            habilidades.options[habilidades.selectedIndex].innerHTML = habilidades.options[habilidades.selectedIndex].innerHTML+\" * \"
                        }
                    </script>";
                }
            }
        } ?>
        

<script src="../../js/footer.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
            var itemsjs = [];
            var permicao = false;

            
                    

              

            $(function(){
                $('#habilidadesBtn').on('click', function(){

                    //------------------php-----------------------------//
                    var habilidade = "habilidade="+habilidades.options[habilidades.selectedIndex].value;
                    var idVaga = "idVaga="+document.getElementById("IdVaga").value;
                    const words = habilidades.options[habilidades.selectedIndex].innerHTML.split(' ');
                    console.log(idVaga);


                    //___________________js_____________________________//
                    for (let index = 0; index <= itemsjs.length; index++) {

                        if (itemsjs[index] == habilidades.options[habilidades.selectedIndex].value || words[1] =='*') {
                            
                                console.log("entrei no while do js(itemsJs)");
                                permicao = false;
                                alert("ja cadastrado");
                            
                                
                                console.log("a segunda é: "+words[1]);
                            
                                
                                break;
                                
                        }
                        else{
                            console.log("entrei no true");
                            permicao = true;
                        }
                    }

                    if (permicao == true) {
                        
                            itemsjs.push(habilidades.options[habilidades.selectedIndex].value)

                            if(words[1]!='*'){
                                    habilidades.options[habilidades.selectedIndex].innerHTML = habilidades.options[habilidades.selectedIndex].innerHTML+" * ";
                            }
                            //------------------php-----------------------------//
                                var xhr;
                           
                                if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                                    xhr = new XMLHttpRequest();

                                }
                                
                            
                                else if (window.ActiveXObject) { // IE 8 and older

                                    xhr = new ActiveXObject("Microsoft.XMLHTTP");

                                }
                                
                                xhr.open("POST", "../AssincronismoRequisicaoVaga.php?"+idVaga, true); 
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                                xhr.send(habilidade);
                                xhr.onreadystatechange = display_data;
                                
                                function display_data() {

                                    if (xhr.readyState == 4) {

                                        if (xhr.status == 200) {

                                            items += xhr.responseText;

                                            if (items == "" || items == null || items == " ") {

                                                document.getElementById('containerRequisitos').innerHTML = "sem mais resultados.."
                                            
                                            }else{

                                                document.getElementById('selecionados').innerHTML += items;   

                                            }

                                        }
                                        else {

                                            alert('There was a problem with the request.');

                                        }
                                    }
                                }
                                //------------------php-----------------------------//

                        }
                        
                    //___________________js_____________________________//

                    
                });
            });

    </script>
</html>
