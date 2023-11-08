<?php 
    session_start();
    include("./conexao.php");

    $num = $_POST['n'];
    $cnpj = $_SESSION['id'];
    $idVaga = $_GET['idVaga'];
    $busca = mysqli_query($con, "SELECT * FROM interesse WHERE id_vaga = \"$idVaga\" and aprovacao <> 0 LIMIT 6 OFFSET $num");
    
    $res = "   <div class=\"conteinerH2\">
                    <h2>Currículos Disponiveis</h2>
                </div>
 ";
    
        if (mysqli_num_rows($busca)==0 && $num <=1) {
            $num = mysqli_num_rows($busca);
            $res= $res.
            "<div class=\"respostaElse\">
                <h2>Ao que parece Ninguem se inscreveu pra essa vaga</h2>
            </div>
            ";
        }
        else if(mysqli_num_rows($busca)==0 && $num >1){
            $res = $res."
            <div class=\"respostaElse\">
                <h2>Ao que parece Ninguem mais se inscreveu pra essa vaga</h2>
            </div>
            <div class=\"altera\">
                <button class=\"esquerda\" onclick=\"rmv1($idVaga)\"><</button>
            </div>
            ";
        }
        
        else{   
            
            while($resultado = mysqli_fetch_row($busca)){

                $cpf= $resultado[1];
                $busca2 = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$cpf'");
                $aprovacaoPosta = $resultado[4]; 

                if($aprovacaoPosta==1){
                    $botesAprovacao = "<button class=\"aprovado\">Aprovado!</button>";
                }else{
                    $botesAprovacao = "<button onclick=\"dispensar($cpf, $idVaga)\" class=\"cadastrar\">Dispensar</button>";
                }

                while($resultado2 = mysqli_fetch_row($busca2)){
                        $idade =  calcularIdade($resultado2[6]);
                        $enviarA = $cpf."-".$idVaga;
                        $res = $res."
                        
                    <div class=\"cardVaga\">
                        <div class=\"imgLogo img_conteiner\">
                            <img src=\"".$resultado2[3]."\" alt=\"logo\">
                        </div>

                        <div class=\"informacoes_da_vaga vaga\">
                            <p><strong>".$resultado2[4]."</strong></p><br>
                            <div class=\"oferta spaceAround\">
                                <div class=\"idade\"><p><i>".$idade."</i> anos</p></div>
                                <div><p>|</p></div>
                                <div class=\"local\"><p>".$resultado2[7]."</p></div>
                            </div>
                        </div>

                        <div class=\"flexC detalhes_Oferta\">
                            <a href=\"./curriculoUser.php?data=$enviarA\"><button>Ver Currículo</button></a>
                            ".$botesAprovacao."
                        </div>
                    </div>

                        ";
                }
            }
            $res = $res."<div class=\"altera\">
                            <button class=\"esquerda\" onclick=\"rmv2($idVaga)\"><</button>
                            <button class=\"direita\"  onclick=\"add2($idVaga)\">></button>
                        </div>
                        <script>autorizacao2=true;</script>";
       }
            
        
    
        echo $res;
    
    /* colocar lógica de banco */

    function calcularIdade($date){
        $time = strtotime($date);
        if($time === false){
          return '';
        }
     
        $year_diff = '';
        $date = date('Y-m-d', $time);
        list($year,$month,$day) = explode('-',$date);
        $year_diff = date('Y') - $year;
        $month_diff = date('m') - $month;
        $day_diff = date('d') - $day;
        if ($day_diff < 0 || $month_diff < 0) $year_diff;
     
        return $year_diff;
    }

?>