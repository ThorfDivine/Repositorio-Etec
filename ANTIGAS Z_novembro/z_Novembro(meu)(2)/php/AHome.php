<?php
    session_start();
    include("./conexao.php");

    $num = $_POST['n'];
    $cnpj = $_SESSION['id'];
    $busca = mysqli_query($con, "SELECT * FROM vaga WHERE cnpj_empresa = \"$cnpj\" LIMIT 6 OFFSET $num");
    $resultado2 = mysqli_fetch_row($busca);
    $res = "<div class=\"conteinerH2\">
                <h2>Vagas Anunciadas</h2>
            </div>";
    
        if (mysqli_num_rows($busca)==0 && $num <= 1) {
            $num = mysqli_num_rows($busca);
            $res= $res.
            "$num <div class=\"respostaElse\">
                <h1>Ao que parece você não possui anúncios de vagas</h1>
                <h3>Clique <a href=\"../../php/criarVagas.php\">aqui</a> para iniciar sua jornada!</h3>
            </div>";
        }
        else if(mysqli_num_rows($busca) == 0 && $num>1 ) {
            $res = $res."
            <div class=\"respostaElse\">
                <h1>Ao que parece você não possui mais anúncios de vagas</h1>
            </div>
            <div class=\"altera\">
                <button class=\"esquerda\" onclick=\"rmv()\"><</button>
            </div> 
            <script>autorizacao1=false; console.log(autorizacao);</script>
            ";
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

                if($resultado[6]==1){
                    $aberto = "aberta";
                }else{
                    $aberto= "fechado";
                }
                
                

                if($aberto=="aberta"){

                    $res = $res. 
                        "<div class=\"cardVaga\" onclick=\" verCurriculos(".$id_vaga.") \">
                            <div class=\"imgLogo img_conteiner\">
                                <img src=\"".$buscaLogo[0]."\" alt=\"logo\">
                            </div>
                            <div class=\"informacoes_da_vaga\">
                                <p><strong>".$resultado[1]."</strong></p><br>
                                <div><p class=\"m1rem\">Status: <i>".$aberto."</i></p> <!----> <p style=\"margin-left: 25px;\"> | </p> <!----> <p style=\"margin-left: 25px;\"> N° <i>inscrições: ".$buscaInteressados."</i></p></div>
                            </div>
                            <div class=\"flexC botoes\">
                                <button class=\"ativo\" onclick=\"fecharVaga(".$resultado[0].")\"><span class=\"material-symbols-outlined\">toggle_on</span></button>
                                <a href=\"../../php/empresa/detalhesVaga.php?idVaga=".$resultado[0]."\"><button class=\"detalhes\">Detalhes</button></a>
                            </div>
                            <div>
                                <a href=\"../../php/empresa/editarVaga.php?id=".$resultado[0]."\">
                                    <div class=\"editar\">
                                        <span class=\"material-symbols-outlined\"> edit_note </span>
                                    </div>
                                </a>
                            </div>
                        </div>";
                }
                else{
                    $res = $res. 
                        "<div class=\"cardVaga\">
                            <div class=\"imgLogo img_conteiner\">
                                <img src=\"".$buscaLogo[0]."\" alt=\"logo\">
                            </div>
                            <div class=\"informacoes_da_vaga\">
                                <p><strong>".$resultado[1]."</strong></p><br>
                                <div><p class=\"m1rem\">Status: <i>".$aberto."</i></p> <!----> <p style=\"margin-left: 25px;\"> | </p> <!----> <p style=\"margin-left: 25px;\"> N° <i>inscrições: ".$buscaInteressados."</i></p></div>
                            </div>
                            <div class=\"flexC botoes\">
                                <button class=\"desativo\" onclick=\"reativarVaga(".$resultado[0].")\"><span class=\"material-symbols-outlined\">toggle_off</span></button>
                                <a href=\"../../php/empresa/detalhesVaga.php?idVaga=".$resultado[0]."\"><button class=\"detalhes\">Detalhes</button></a>
                            </div>
                            <div>
                                <a href=\"../../php/empresa/editarVaga.php?id=".$resultado[0]."\">
                                    <div class=\"editar\">
                                        <span class=\"material-symbols-outlined\"> edit_note </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        ";
                }    
                
                      
            }
            $res= $res."
            <div class=\"altera\">
                <button class=\"esquerda\" onclick=\"rmv()\"><</button>
                <button class=\"direita\"  onclick=\"add()\">></button>
            </div>
            <script> autorizacao1=true; </script>
            ";
       }
            
        
    
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>