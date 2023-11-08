<?php
    session_start();
    include("./conexao.php");

    $res = "";
    $cpf = $_SESSION['cpf'];
    $num = $_POST['idDaComp'];
    $busca = mysqli_query($con, "SELECT * FROM competencia where id_competencia = $num");
    
        
            
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
                                    <div class=\"redPoint\" id=\"u\"></div> <!--  u m     -->
                                    <div class=\"redPoint\" id=\"d\"></div> <!--  d ois   -->
                                    <div class=\"redPoint\" id=\"t\"></div> <!--  t rês   -->
                                    <div class=\"redPoint\" id=\"q\"></div> <!--  q uatro -->
                                    <div class=\"redPoint\" id=\"c\"></div> <!--  c inco  -->
                                        <!-- redo -->
                                </div>

                                <div class=\"refresh\">
                                    <span class=\"material-symbols-outlined\" id=\"refresh\"> refresh </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                ";
                
     
                
            }
            
       
            
        
    
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>