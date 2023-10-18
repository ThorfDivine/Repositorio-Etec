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
                
                if($resultado[8]==1){
                    $aberto = "aberta";
                }else{
                    $aberto= "fechado";
                }

                $res = $res. 
                    "<div class=\"cardVaga\">
                        <div class=\"imgLogo img_conteiner\">
                            <img src=\"#\" alt=\"logo\">
                        </div>
                        <div class=\"informacoes_da_vaga\">
                            <p><strong>".$resultado[1]."</strong></p><br>
                            <div><p class=\"m1rem\">Status: <i>".$aberto."</i></p> <!----> <p style=\"margin-left: 25px;\"> | </p> <!----> <p style=\"margin-left: 25px;\"> N° <i>inscrições</i></p></div>
                        </div>
                        <div class=\"flexC botoes\">
                            <button class=\"lixeira\"><span class=\"material-symbols-outlined\">delete</span></button>
                            <button class=\"detalhes\">Detalhes</button>
                        </div>
                        <div>
                            <div class=\"editar\">
                                <span class=\"material-symbols-outlined\"> edit_note </span>
                            </div>
                        </div>
                    </div>";
                    
                
            }
        }
            
        
    
        echo $res;
    
    /* colocar lógica de banco */
    
    
    ?>

?>