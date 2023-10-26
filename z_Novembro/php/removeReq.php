<?php
session_start();
include("./conexao.php");
if (!isset($_SESSION['Pudim7w7']) || $_SESSION['Pudim7w7'] =="" || $_SESSION['Pudim7w7'] == null) {
    header('Location: ../../html/login.html');
}   

$idHabilidade = $_POST['habilidade'];
$idVaga = $_GET['idVaga'];



$res = "";

$gravar = mysqli_query($con, 
"DELETE FROM EMPREGADOS
    WHERE CODIGO = 125 values('$idVaga','$idHabilidade')");
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