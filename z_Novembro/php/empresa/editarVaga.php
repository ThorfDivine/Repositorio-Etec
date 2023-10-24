<?php
session_start();
include("../conexao.php");
if (!isset($_SESSION) || $_SESSION =="" || $_SESSION == null) {
    header('Location: ../../html/login.html');
}
$id_vaga = $_GET['id'];

$busca = mysqli_query($con, "SELECT * FROM vaga WHERE id_vaga = '$id_vaga'");
$resultadoVaga = mysqli_fetch_row($busca);
$cargo = $resultadoVaga[3];
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
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/editarVagas.css">
        <!-- End -->
    <title>BartoHelp - Editar Vagas</title>
</head>     
<body>
    
    <header></header>

        <section class="bigMarginTop bigMarginBotom centralize">
            <form action="../updateVaga.php" class="flexC" method="POST">
                <div class="conteiner_form flexR">
                    <div class="flexC left alingCenter">
                        <div class="conteiner">
                            <label for="titleVg" class="lable">Título da vaga: </label>
                                <input type="text" name="titulo" id="titleVg" class="inputPattern" placeholder="ex: Programador Jr." <?php echo "value=".$resultadoVaga[1]?> >
                        </div>
                        <div class="conteiner">
                            <label for="cargo" class="lable">Cargo: </label>
                                <input type="text" name="cargo" id="cargo" class="inputPattern" placeholder="ex: Trainee" >
                        </div>
                        <div class="conteiner">
                            <label for="salario" class="lable">Salário: </label>
                                <input type="text" name="salario" id="salario" class="inputPattern" placeholder="ex: R$ 2000.00" <?php echo "value=".$resultadoVaga[9]?>>
                        </div>
                        <div class="conteiner flexC">
                            <label for="titleVg" class="lable">Data limite: </label>
                            <input type="date" name="limit" id="titleVg" class="inputPattern" <?php echo "value=".$resultadoVaga[6]?>>
                        </div>
                    </div>
                    <div class="flexC right alingCenter">
                        <div class="conteiner centralize">
                            <input type="checkbox" name="home" value="home office" id="home" style="display: none;">
                            <label for="home" id="whereLable" style="cursor: pointer;"> Formato: Home officie <span class="material-symbols-outlined" id="whereSpan" style="font-size: 1.2rem;"> factory </span></label>
                        </div>
                        <div class="conteiner">
                            <label for="cep" class="lable">Cep: </label>
                            <input type="text" name="cep" id="cep" class="inputPattern" placeholder="ex: 14015-040" <?php echo "value=".$resultadoVaga[10]?>>
                        </div>
                        <div class="conteiner">
                            
                            <label for="habilidades" class="lable Habili_fontLow">Habilidades Requisitadas:</label>
                            <input type="button" value="Adicionar" class="btnAdicionar" id="adicionar" <?php echo "value=".$resultadoVaga[4]?>>

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
                        <div class="conteiner">
                            <label for="beneficios" class="lable">Benefícios oferecidos:</label><br>
                            <textarea name="message" id="beneficios" class="inputPattern" placeholder="ex: Vale transporte, etc..."><?php echo $resultadoVaga[4]?></textarea>
                        </div>

                        <div style="display: none;">
                            <div class="conteiner">
                                <label for="bairro" class="lable">Bairro: </label>
                                <input type="text" name="bairro" id="bairro" class="inputPattern" placeholder="ex: Portal 3">
                            </div>
                            <div class="conteiner">
                                <label for="cidade" class="lable">Cidade: </label>
                                <input type="text" name="cidade" id="cidade" class="inputPattern" placeholder="ex: Santana de Parnaíba">
                            </div>
                            <div class="conteiner">
                                <label for="estado" class="lable">Estado: </label>
                                <input type="text" name="estado" id="estado" class="inputPattern" placeholder="ex: São Paulo">
                            </div>
                            <div class="conteiner">
                                <label for="rua" class="lable">Rua: </label>
                                <input type="text" name="rua" id="rua" class="inputPattern" placeholder="ex: São Paulo">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="spaceEvenly">
                    <div></div>
                    <div>
                        <input type="button" id="clear" value="Limpar Formulário" class="buttonPattern">
                    </div>
                    <div>
                        <input type="text" name="id_vaga" style="display:none" <?php echo "value='$resultadoVaga[0]'"?>>
                        <input type="submit" id="enviar" value="..." class="buttonPattern btnBlocked">
                    </div>
                    <div></div>
                </div>
            </form>
        </section>

        

    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/checkNewVg.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var items = [];
        var habilidades = document.getElementById("habilidades");
        var permicao = false;

            $(function(){
                $('#adicionar').on('click', function(){
                
                        for (let index = 0; index <= items.length; index++) {

                            if (items[index] == habilidades.options[habilidades.selectedIndex].value) {
                                permicao = false
                                break;
                            }
                            else{
                                permicao = true
                            }

                        }

                            
                        if (permicao) {
                            items.push(habilidades.options[habilidades.selectedIndex].value)
                        }
                        else{
                            alert("ja cadastrado")
                        }
                
                        var xhr;

                        if (window.XMLHttpRequest) { // Mozilla, Safari, ...

                            xhr = new XMLHttpRequest();

                        } else if (window.ActiveXObject) { // IE 8 and older

                            xhr = new ActiveXObject("Microsoft.XMLHTTP");
                        }

                            xhr.open("POST", "cadastrarVaga.php", true); 
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
                            xhr.send(items);
                    
                });
            });
    </script>
</html>