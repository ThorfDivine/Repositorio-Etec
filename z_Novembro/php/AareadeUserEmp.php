<?php
    session_start();
    include("./conexao.php");

    $num = $_POST['n'];
    $cnpj = $_SESSION['id'];
    $busca = mysqli_query($con, "SELECT * FROM vaga WHERE cnpj_empresa = \"$cnpj\" LIMIT 6 OFFSET $num");
    $resultado2 = mysqli_fetch_row($busca);
    $res = "<div class=\"titulo alingCenter\">
                <h2 class=\"marginLeft12px\">Vagas Anunciadas: </h2>
            </div>";
    
        if ((mysqli_num_rows($busca) == 0) && $num <=1) {

            $num = mysqli_num_rows($busca);
            $res= $res.
            "<div class=\"respostaElse\">
                <h1>Ao que parece você não possui anúncios de vagas</h1>
                <h3>Clique <a href=\"../../php/criarVagas.php\">aqui</a> para iniciar sua jornada!</h3>
            </div>";
        }
        else if((mysqli_num_rows($busca) == 0) && $num >1){
            $res = "<h2>sem mais resultados...</h2>";
        }
        else{
            $busca = mysqli_query($con, "SELECT * FROM vaga WHERE cnpj_empresa = \"$cnpj\" LIMIT 6 OFFSET $num");
    
            $resultado;
            
            while($resultado = mysqli_fetch_row($busca)){

                $cnpj = $resultado[7];
                $id_vaga = $resultado[0];
                $buscaInteressados = mysqli_query($con, "SELECT * FROM interesse WHERE id_vaga = '$id_vaga'");
                $buscaInteressados = mysqli_num_rows($buscaInteressados);
                $buscaLogo1 = mysqli_query($con, "SELECT logo FROM empresa where cnpj ='$cnpj'");
                $buscaLogo = mysqli_fetch_row($buscaLogo1);
                if($buscaLogo[0] == ""){
                    $logo = "../../contents/imgs/3106921.png";
                }else{
                    $logo=$buscaLogo[0];
                }

                if($resultado[6]==1){
                    $aberto = "aberta";
                }else{
                    $aberto= "fechado";
                }
                
                if($aberto=="aberta"){

                    $res = $res. 
                        "<div class=\"cardVaga\">

                            <div class=\"imgLogo img_conteiner\">

                                <img src= \" ".$logo." \" alt=\"logo\">

                            </div>

                            <div class=\"informacoes_da_vaga\">

                                <p><strong>".$resultado[1]."</strong></p><br>

                                <div class=\"detalhes_vaga\">

                                    <div class=\"detalhes_p flexR\">

                                        <p id=\"insc\"><i id=\"inscricoes\">N°</i> inscrições ".$buscaInteressados."</p>
                                        <p>|</p>
                                        <p id=\"status\">status".$aberto."</p>

                                        <div>

                                            <div class=\"flexC botoes\">

                                            <a href=\"detalhesVaga.php?idVaga=".$resultado[0]."\"><button class=\"detalhes\">Detalhes</button></a>
                                            
                                            </div>


                                        </div>

                                    </div>


                                </div>

                            </div>

                            <div class=\"h100prc flexR alingCenter\">

                                <a href=\"./editarVaga.php?id=".$id_vaga."\">
                                    <div class=\"editarVg\">
                                        <span class=\"material-symbols-outlined\"> edit_note </span>
                                    </div>
                                </a>

                                <div class=\"deletVg alingCenter\">
                                    
                                    <button class=\"ativo\" onclick=\" fecharVaga( ".$resultado[0]." )\"> <span class= \" material-symbols-outlined \"> toggle_on </span> </button>
                                
                                </div>

                            </div>

                        </div>";
                }
                else{
                    $res = $res. 
                        "<div class=\"cardVaga\">

                            <div class=\"imgLogo img_conteiner\">

                                <img src= \" ".$logo." \" alt=\"logo\">

                            </div>

                            <div class=\"informacoes_da_vaga\">

                                <p><strong>".$resultado[1]."</strong></p><br>

                                <div class=\"detalhes_vaga\">

                                    <div class=\"detalhes_p flexR\">

                                        <p id=\"insc\"><i id=\"inscricoes\">N°</i> inscrições ".$buscaInteressados."</p>
                                        <p>|</p>
                                        <p id=\"status\">status".$aberto."</p>

                                        <div>

                                            <div class=\"flexC botoes\">

                                            <a href=\"detalhesVaga.php?idVaga=".$resultado[0]." \"><button class=\"detalhes\">Detalhes</button></a>
                                            
                                            </div>


                                        </div>

                                    </div>


                                </div>

                            </div>

                            <div class=\"h100prc flexR alingCenter\">

                                <a href=\"./editarVaga.php?id=".$id_vaga."\">
                                <div class=\"editarVg\">
                                    <span class=\"material-symbols-outlined\"> edit_note </span>
                                </div>
                                </a>

                                <div class=\"deletVg alingCenter\">
                                    
                                    <button class=\"desativo\" onclick=\"reativarVaga(".$resultado[0].") \"><span class=\"material-symbols-outlined\">toggle_off</span></button>
                                
                                </div>

                            </div>
                            
                        </div>";
                }    
                
            }
       }
            
       
        
    
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>