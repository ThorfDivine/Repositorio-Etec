<?php 
    session_start();
    include('./conexao.php');
    include('./upload.php');

    if (!empty($_POST)) {
        # code...
        $titulo = $_POST['titulo'];
        $cargo = $_POST["cargo"];
        $salario= $_POST["salario"];
        $dataLimite = $_POST["limit"];
        $cep = $_POST["cep"];
        //$habilidadesReq = $_POST["password"];
        $Beneficios = $_POST["message"];

        
            
        


        
    }

?>