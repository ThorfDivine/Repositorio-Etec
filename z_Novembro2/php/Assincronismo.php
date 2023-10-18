<?php
    
    include("./conexao.php");
    $num = $_POST['n'];
    $busca = mysqli_query($con, "select * from vaga LIMIT 6 OFFSET ".$num);
    
    $res = "";
    
        if (empty($busca) || !$busca || $busca == "" || $busca == null) {
            $num = mysqli_num_rows($busca);
            $res=
            "<div class=\"respostaElse\">
                <h1>Ao que parece você não possui anúncios de vagas</h1>
                <h3>Clique <a href=\"../../php/criarVagas.php\">aqui</a> para iniciar sua jornada!</h3>
            </div>";
            $busca;
        }
        else{
            $resultado;
                        
            while($resultado = mysqli_fetch_row($busca)){
                $cnpj = $resultado[9];
                $id_vaga = $resultado[0];
                $buscaInteressados = mysqli_query($con, "SELECT * FROM interesse WHERE id_vaga = '$id_vaga'");
                $buscaInteressados = mysqli_num_rows($buscaInteressados);
                $buscaLogo1 = mysqli_query($con,"SELECT logo FROM empresa where cnpj ='$cnpj'");
                $buscaLogo = mysqli_fetch_row($buscaLogo1);



                if($resultado[8]==1){
                    $aberto = "aberta";
                }else{
                    $aberto= "fechado";
                }
                
                if($aberto=="aberto"){

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
                                <button class=\"lixeira\" onclick=\"fecharVaga()\"><span class=\"material-symbols-outlined\">delete</span></button>
                                <button class=\"detalhes\">Detalhes</button>
                            </div>
                            <div>
                                <div class=\"editar\">
                                    <span class=\"material-symbols-outlined\"> edit_note </span>
                                </div>
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
                                <button class=\"lixeira\" onclick=\"fecharVaga()\"><span class=\"material-symbols-outlined\">delete</span></button>
                                <a href=\"detalhesVaga.php?idVaga=".$resultado[0]."\"><button class=\"detalhes\">Detalhes</button></a>
                            </div>
                            <div>
                                <div class=\"editar\">
                                    <span class=\"material-symbols-outlined\"> edit_note </span>
                                </div>
                            </div>
                        </div>";
                }    
                
            }
        }
            
        
    
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>