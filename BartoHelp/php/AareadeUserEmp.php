<?php
    session_start();
    include("./conexao.php");

    $num = $_POST['n'];
    $cpf = $_SESSION['cpf'];
    $cnpj = $_GET['id'];
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
                $busca1 = mysqli_query($con, "SELECT * from interesse where id_usuario = '$cpf' and id_vaga= '$id_vaga'");
                if(mysqli_num_rows($busca1) >= 1){
                    $resultado1 = mysqli_fetch_row($busca1);
                    if($resultado1[3] == 1){

                        if ($resultado1[4]==2){
                            $bolinha= "analize";
                        }
                        else if ($resultado1[4]==1){
                            $bolinha= "reprovado";
                        }
                        else if ($resultado1[4]==3){
                            $bolinha= "analize";
                        }
                        $filtroIdVaga = $resultado1[2];
                        $res = $res. 
                        
                            "<div class=\"cardVaga\">

                                <div class=\"imgLogo img_conteiner\">
                                    <img src=\"".$buscaLogo[0]."\" alt=\"logo\">
                                </div>

                                <div class=\"informacoes_da_vaga\">

                                    <p><strong>".$resultado[1]."</strong></p><br>

                                    <div>
                                        <p>Status: <i>.$bolinha.</i></p>
                                            <button class=\"lixeira\" onclick=\" cancelar($filtroIdVaga) \"><span class=\"material-symbols-outlined\">delete</span></button>
                                            <button class=\"detalhes\" ><a href=\" ./maisDetalhesMinhasVagas.php?idVaga=".$filtroIdVaga." \">Mais Detalhes </a></button>
                                    </div>

                                </div>

                                <div class=\"redPoint ".$bolinha."\"></div>

                            </div>";
                    }
                }else{
                    $res = $res. 
                    "<div class=\"cardVaga\">
                    <div class=\"imgLogo img_conteiner\">
                        <a href=\"./areaDaEmpresa.php?id=$cnpj\">
                            <img src=".$buscaLogo[0]." alt=\"logo\">
                        </a>
                    </div>
                    <div class=\"informacoes_da_vaga vaga\">
                        <p><strong>".$resultado[1]."</strong></p><br>
                        <div class=\"oferta spaceAround\">
                            <div class=\"salario\"><p>R$ ".$resultado[8]."</p></div>
                            <div><p>|</p></div>
                            <div class=\"local\"><p>".$resultado[9]."</p></div>
                        </div>
                    </div>
                    <div class=\"flexC detalhes_Oferta spaceEvenly\">
                        <button class=\"cadastrar\" onClick=\" inscrever_se('".$id_vaga."') \">Cadastrar-se</button>
                        <button><a href=\"./maisDetalhesVaga.php?idVaga=".$id_vaga."\">Mais Detalhes</a></button>
                    </div>
                </div>"; 
                }
                 
            }
       }
            
       
        
    
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>