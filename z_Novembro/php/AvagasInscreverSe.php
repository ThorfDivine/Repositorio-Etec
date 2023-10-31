<?php
    session_start();
    include("./conexao.php");

    $num = $_POST['n'];
    $busca = mysqli_query($con, "SELECT * FROM vaga WHERE aberta = 1 LIMIT 6 OFFSET $num");
    $resultado2 = mysqli_fetch_row($busca);
    $cpf = $_SESSION['cpf'];
    $vagajainscrita = array();
    $res = "
            <div id=\"vagas\" class=\"conteinerH2\">
                <h2>Vagas Disponiveis</h2>
            </div> ";
    
        if (mysqli_num_rows($busca) <= 0) {
            $num = mysqli_num_rows($busca);
            $res= $res.
            "<div class=\"respostaElse\">
                <h1>Ao que parece não existem anúncios de vagas</h1>
             </div>";
        }
        
        else{
            $busca1 = mysqli_query($con, "SELECT * from interesse where id_usuario = '$cpf'");
            while($resultado1 = mysqli_fetch_row($busca1)){
                array_push($vagajainscrita, $resultado1[2]);
                
            }
            $busca = mysqli_query($con, "SELECT * FROM vaga WHERE aberta = 1 LIMIT 6 OFFSET $num");

            
                    $resultado;
                
                    while($resultado = mysqli_fetch_row($busca)){
                        $permicao = true;
                        foreach ($vagajainscrita as $key => $value) {
                            if ($valores == $resultado[0]) {
                                $permicao = false;
                                break;
                            }
                        }
                        if($permicao){
                            $cnpj = $resultado[7];
                            $id_vaga = $resultado[0];
                            $buscaLogo1 = mysqli_query($con, "SELECT logo FROM empresa where cnpj ='$cnpj'");
                            $buscaLogo = mysqli_fetch_row($buscaLogo1);

                                $res = $res. 
                                "<div class=\"cardVaga\">
                                <div class=\"imgLogo img_conteiner\">
                                    <img src=".$buscaLogo[0]." alt=\"logo\">
                                </div>
                                <div class=\"informacoes_da_vaga vaga\">
                                    <p><strong>".$resultado[1]."</strong></p><br>
                                    <div class=\"oferta spaceAround\">
                                        <div class=\"salario\"><p>R$ ".$resultado[8]."</p></div>
                                        <div><p>|</p></div>
                                        <div class=\"local\"><p>".$resultado[10]."</p></div>
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