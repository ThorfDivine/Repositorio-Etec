<?php
include("./conexao.php");
$idHabilidade = $_POST['habilidade'];
$idVaga = $_GET['idVaga'];



$res = "";

$gravar = mysqli_query($con, 
"insert into competencia_vaga(id_vaga,id_competencia) values('$idVaga','$idHabilidade')");
$busca = mysqli_query($con, "select * from competencia where id_competencia = ".$idHabilidade);

    if (empty($busca) || !$busca || $busca == "" || $busca == null) {
        $num = mysqli_num_rows($busca);
        $res="nenhum resultado";
        $busca;
    }
    else{

        $resultado;
            
            while($resultado = mysqli_fetch_row($busca)){
                $res = $res."
                <div class=\"selecionados flexC\">
                    <div id=\"containerRequisitos\">
                        <h2>".$resultado[1]."</h2>
                        <div class=\"explain\">
                            <p>".$resultado[2]."</p>
                        </div>
                    </div>
    

                </div>
                
                ";
            }

    }
        
    

    echo $res;

/* colocar lógica de banco */


?>