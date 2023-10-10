<?php
include("./conexao.php");
$num = $_POST['n'];
$busca = mysqli_query($conexao, "select * from empresa LIMIT 10 OFFSET ".$num);
$res = "";

    if (empty($busca) || !$busca || $busca == "" || $busca == null) {
        $num = mysqli_num_rows($busca);
        $res="nenhum resultado";
        $busca;
    }
    else{
        $resultado;
                    
        while($resultado = mysqli_fetch_row($busca)){

            $res = $res. 
                "<div class= \"item\" >        
                        <img src= \" ".$resultado[5]." \" class=\" imagemItem \" >
                        <div class=\" item2 \">
                            <p> cnpj: ".$resultado[0]."<br/>
                            nome: ".$resultado[1]."<br/> 
                            gmail: ".$resultado[2]."<br/>
                            telefone: ".$resultado[4]."</p> <br/> 
                        </div>
                </div> <br/>";
                
            
        }
    }
        
    

    echo $res;

/* colocar lógica de banco */


?>