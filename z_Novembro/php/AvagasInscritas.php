<?php
    session_start();
    include("./conexao.php");

    $cpf = $_SESSION['cpf'];
    $num = $_POST['n'];
    $busca1 = mysqli_query($con, "SELECT * FROM interesse WHERE id_usuario = '$cpf'");
    $n= mysqli_num_rows($busca1);
    
    $res = "
    <div class=\"conteinerH2\">
        <h2>Vagas Inscritas</h2>
    </div> ";
    
        if ( $n<=0 && $num <=1) {
            $num = mysqli_num_rows($busca1);
            $res= $res.
            "<div class=\"respostaElse\">
                <h1>Ao que parece você não possui inscrições de vagas</h1>                
            </div>";
        }
        
        else{

            while($resultado2 = mysqli_fetch_row($busca1)){
                $filtroIdVaga = $resultado2[2];
                $busca = mysqli_query($con, "SELECT * FROM vaga WHERE id_vaga = '$filtroIdVaga' LIMIT 6 OFFSET $num");
        
                $resultado;
                
                while($resultado = mysqli_fetch_row($busca)){
                    $cnpj = $resultado[7];
                    $id_vaga = $resultado[0];
                    $buscaLogo1 = mysqli_query($con, "SELECT logo FROM empresa where cnpj ='$cnpj'");
                    $buscaLogo = mysqli_fetch_row($buscaLogo1);
                        if ($resultado1[4]==2){
                            $bolinha= "analize";
                        }
                        else if ($resultado1[4]==1){
                            $bolinha= "reprovado";
                        }
                        else if ($resultado1[4]==3){
                            $bolinha= "analize";
                        }
                        $res = $res. 
                        
                            "<div class=\"cardVaga\">

                                <div class=\"imgLogo img_conteiner\">
                                    <img src=\"".$buscaLogo[0]."\" alt=\"logo\">
                                </div>

                                <div class=\"informacoes_da_vaga\">

                                    <p><strong>".$resultado[1]."</strong></p><br>

                                    <div>
                                        <p>Status: <i>detalhes</i></p>
                                            <button class=\"lixeira\"><span class=\"material-symbols-outlined\">delete</span></button>
                                            <button class=\"detalhes\">Mais Detalhes</button>
                                    </div>

                                </div>

                                <div class=\"redPoint ".$bolinha."\"></div>

                            </div>";             
                        
                }
            }
       }
            
      
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>