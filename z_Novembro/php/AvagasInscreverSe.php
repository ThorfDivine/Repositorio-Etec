<?php
    session_start();
    include("./conexao.php");

    $num = $_POST['n'];
    $busca = mysqli_query($con, "SELECT * FROM vaga WHERE aberta = 1 LIMIT 6 OFFSET $num");
    $resultado2 = mysqli_fetch_row($busca);
    $cpf = $_SESSION['cpf'];
    $res = "
            <div id=\"vagas\" class=\"conteinerH2\">
                <h2>Vagas Disponiveis</h2>
            </div> ";
    
        if (empty($resultado2) || !$resultado2 || $resultado2 == "" || $resultado2 == null || $resultado2 == " " && $num <=1) {
            $num = mysqli_num_rows($busca);
            $res= $res.
            "<div class=\"respostaElse\">
                <h1>Ao que parece você não possui anúncios de vagas</h1>
                <h3>Clique <a href=\"../../php/criarVagas.php\">aqui</a> para iniciar sua jornada!</h3>
            </div>";
        }
        
        else{
            $busca = mysqli_query($con, "SELECT * FROM vaga WHERE aberta = 1 LIMIT 6 OFFSET $num");
    
            $resultado;
            
            while($resultado = mysqli_fetch_row($busca)){
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
                        <button class=\"cadastrar\" onClick=\" increver_se('".$id_vaga."') \">Cadastrar-se</button>
                        <button>Mais Detalhes</button>
                    </div>
                </div>";              
                      
            }
       }
            
       
    
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>