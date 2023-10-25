<?php
include("./conexao.php");
$idVaga = $_POST['idVaga'];



$res = "";

$busca = mysqli_query($con, "select * from competencia_vaga where id_vaga = '$idVaga'");
$b = "";



    if (empty($busca) || !$busca || $busca == "" || $busca == null) {
        $num = mysqli_num_rows($busca);
        $res="nenhum resultado";
    }
    else{
        while($b = mysqli_fetch_row($busca)){
        
            $id_competencia = $b[0];

            $busca2 = mysqli_query($con,"SELECT * from competencia where id_competencia = '$id_competencia'");


            while($resultado = mysqli_fetch_row($busca2)){

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
        $resultado;
            
            

    }
        
    

    echo $res;

/* colocar lógica de banco */


?>