<?php
    session_start();
    include("./conexao.php");

    $num = $_POST['idDaComp'];
    $cpf = $_SESSION['cpf'];
    $busca = mysqli_query($con, "SELECT * FROM competencia where id_competencia = $num");
    $res = "";
    
        
            
            while($resultado = mysqli_fetch_row($busca)){

                    $res = $res. 
                        "<div class=\"flexC alingCenter spaceEvenly\" style=\"width: 70%; background-color: rgba(60,60,60,0.2); border-radius: 4px;\">
                        <div class=\"tittle w100prc flexR alingCenter\" id=\"cTitle\">
                            <h1>".$resultado[1]."</h1>
                        </div>

                        <div id=\"competenciaId\" style=\"display: none;\">

                            <!-- Use o ajax//php pra deixar o id da competência nesse h2 -->

                                <h2>".$resultado[0]."</h2>

                        </div>

                            <div class=\"explain\" id=\"explain\">
                                <p>detalhes da competência: ".$resultado[2]."</p>
                            </div>
                        <div class=\"points flexC spaceBetween\">
                            <p id=\"nivel\" class=\"centralize\" style=\"margin-bottom: 15px;\">Nível de competência: <i style=\"margin-left: 5px;\">0</i></p>
                            <div class=\"w100prc centralize\">
                                <div class=\"flexR spaceAround\" style=\"width: 70%;\">
                                    <div class=\"redPoint\" id=\"u\" onclick=\"c".$resultado[0]." = 1\"></div> <!--  u m     -->
                                    <div class=\"redPoint\" id=\"d\" onclick=\"c".$resultado[0]." = 2\"></div> <!--  d ois   -->
                                    <div class=\"redPoint\" id=\"t\" onclick=\"c".$resultado[0]." = 3\"></div> <!--  t rês   -->
                                    <div class=\"redPoint\" id=\"q\" onclick=\"c".$resultado[0]." = 4\"></div> <!--  q uatro -->
                                    <div class=\"redPoint\" id=\"c\" onclick=\"c".$resultado[0]." = 5\"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>
                                <div class=\"refresh\">
                                    <span class=\"material-symbols-outlined\" id=\"refresh\" onclick=\"c".$resultado[0]." = 0\"> refresh </span>
                                </div>
                            </div>
                        </div>
                    </div>";
                
     
                
            }
       
            
        
    
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>