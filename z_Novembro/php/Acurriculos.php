<?php 
    session_start();
    include("./conexao.php");

    $num = $_POST['n'];
    $cnpj = $_SESSION['id'];
    $idVaga = $_GET['idVaga'];
    $busca = mysqli_query($con, "SELECT * FROM interesse WHERE id_vaga = \"$idVaga\" LIMIT 6 OFFSET $num");
    $resultado2 = mysqli_fetch_row($busca);
    $res = "   <div class=\"conteinerH2\">
                    <h2>Currículos Disponiveis</h2>
                </div>
 ";
    
        if (empty($resultado2) || !$resultado2 || $resultado2 == "" || $resultado2 == null || $resultado2 == " " && $num <=1) {
            $num = mysqli_num_rows($busca);
            $res= $res.
            "<div class=\"respostaElse\">
                <h2>Ao que parece Ninguem se inscreveu pra essa vaga</h2>
            </div>

            <div class=\"altera\">
                <button class=\"esquerda\" onclick=\"rmv1($idVaga)\"><</button>
                <button class=\"direita\"  onclick=\"add1($idVaga)\">></button>
            </div>
            <script>autorizacao2=false;</script>
            ";
        }
        
        else{   
            $resultado;
            
            while($resultado = mysqli_fetch_row($busca)){

                $cpf= $resultado[1];
                $busca2 = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$cpf'");

                while($resultado2 = mysqli_fetch_row($busca2)){
                        $idade =  calcularIdade($resultado2[6]);
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
                                <div class=\"local\"><p>".$resultado2[8]."</p></div>
                            </div>
                        </div>

                        <div class=\"flexC detalhes_Oferta\">
                            <a href=\"./curricolouser.php?cpf=$cpf\"><button>Ver Currículo</button></a>
                            <button onclick=\"dispensar($cpf)\" class=\"cadastrar\">Dispensar</button>
                        </div>
                    </div>

                        ";
                }
            }
            $res = $res."<div class=\"altera\">
                            <button class=\"esquerda\" onclick=\"rmv1($idVaga)\"><</button>
                            <button class=\"direita\"  onclick=\"add1($idVaga)\">></button>
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