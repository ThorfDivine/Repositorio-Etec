<?php
    session_start();
    include("./conexao.php");

    $res = "<div class=\"titulo alingCenter\">
                <h2 class=\"marginLeft12px\">Competencias: </h2>
            </div>";
    $cpf = $_GET['cpf'];
    $num = $_POST['idDaComp'];
    $busca = mysqli_query($con, "SELECT * FROM competencia where id_competencia = $num");
    $busca2 = mysqli_query($con, "SELECT * FROM competencia_usuario where id_competencia = $num and cpf_usuario = '$cpf'"); 
    $resultado2 = mysqli_fetch_row($busca2);

    if($resultado2[3] == 0 ){
        $RedPoints = "<div class=\"flexR spaceAround\" style=\"width: 70%;\">
        <div class=\"Point\" id=\"u\"></div> <!--  u m     -->
        <div class=\"Point\" id=\"d\"></div> <!--  d ois   -->
        <div class=\"Point\" id=\"t\"></div> <!--  t rês   -->
        <div class=\"Point\" id=\"q\"></div> <!--  q uatro -->
        <div class=\"Point\" id=\"c\"></div> <!--  c inco  -->
            <!-- redo -->
    </div>";
    }else if($resultado2[3] == 1){
        $RedPoints = "<div class=\"flexR spaceAround\" style=\"width: 70%;\">
        <div class=\"redPoint\" id=\"u\"></div> <!--  u m     -->
        <div class=\"Point\" id=\"d\"></div> <!--  d ois   -->
        <div class=\"Point\" id=\"t\"></div> <!--  t rês   -->
        <div class=\"Point\" id=\"q\"></div> <!--  q uatro -->
        <div class=\"Point\" id=\"c\"></div> <!--  c inco  -->
            <!-- redo -->
    </div>";
    }else if($resultado2[3] == 2){
        $RedPoints = "<div class=\"flexR spaceAround\" style=\"width: 70%;\">
        <div class=\"redPoint\" id=\"u\"></div> <!--  u m     -->
        <div class=\"redPoint\" id=\"d\"></div> <!--  d ois   -->
        <div class=\"Point\" id=\"t\"></div> <!--  t rês   -->
        <div class=\"Point\" id=\"q\"></div> <!--  q uatro -->
        <div class=\"Point\" id=\"c\"></div> <!--  c inco  -->
            <!-- redo -->
    </div>";
    }else if($resultado2[3] == 3){
        $RedPoints = "<div class=\"flexR spaceAround\" style=\"width: 70%;\">
        <div class=\"redPoint\" id=\"u\"></div> <!--  u m     -->
        <div class=\"redPoint\" id=\"d\"></div> <!--  d ois   -->
        <div class=\"redPoint\" id=\"t\"></div> <!--  t rês   -->
        <div class=\"Point\" id=\"q\"></div> <!--  q uatro -->
        <div class=\"Point\" id=\"c\"></div> <!--  c inco  -->
            <!-- redo -->
    </div>";
    }else if($resultado2[3] == 4){
        $RedPoints = "<div class=\"flexR spaceAround\" style=\"width: 70%;\">
        <div class=\"redPoint\" id=\"u\"></div> <!--  u m     -->
        <div class=\"redPoint\" id=\"d\"></div> <!--  d ois   -->
        <div class=\"redPoint\" id=\"t\"></div> <!--  t rês   -->
        <div class=\"redPoint\" id=\"q\"></div> <!--  q uatro -->
        <div class=\"Point\" id=\"c\"></div> <!--  c inco  -->
            <!-- redo -->
    </div>";
    }else if($resultado2[3] == 5){
        $RedPoints = "<div class=\"flexR spaceAround\" style=\"width: 70%;\">
        <div class=\"redPoint\" id=\"u\"></div> <!--  u m     -->
        <div class=\"redPoint\" id=\"d\"></div> <!--  d ois   -->
        <div class=\"redPoint\" id=\"t\"></div> <!--  t rês   -->
        <div class=\"redPoint\" id=\"q\"></div> <!--  q uatro -->
        <div class=\"redPoint\" id=\"c\"></div> <!--  c inco  -->
            <!-- redo -->
    </div>";
    }
            
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
                            
                                ".$RedPoints."

                            
                            </div>
                        </div>
                    </div>
                ";
                
     
                
            }
            
       
            
        
    
        echo $res;
    
    /* colocar lógica de banco */
    
    

?>