<?php
    session_start();
    include("./conexao.php");

    $res = "";
    $cpf = $_SESSION['cpf'];
    $niveis = $_POST['niveisComp'];
    $pieces = explode("-", $niveis);
    
    for ($i=0; $i < sizeof($pieces); $i++) { 
        $competenciaLvl = $pieces[$i];
      
        if($competenciaLvl != "" && $competenciaLvl != " " && !($competenciaLvl < 1 ) && !($competenciaLvl >17))
        {
            $inserir = mysqli_query($con, "insert into competencia_usuario(cpf_usuario, id_competencia, nivel) values('$cpf','$i', '$competenciaLvl')");
        }
    }
    
    
        
            
       
            
        
        if($inserir){
            mysqli_query($con,"insert into usuario(curriculo) values(1) where cpf = $cpf");
                                        
            echo "cadastrado com sucesso";
        }
        else{
            echo "falha ao cadastrar";
        }
        
    
    /* colocar lógica de banco */
    
    

?>