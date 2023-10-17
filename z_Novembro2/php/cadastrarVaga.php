<?php 
    session_start();
    include('./conexao.php');
    include('./upload.php');

    if (!empty($_POST)) {
        # code...
        $titulo = $_POST['titulo'];
        $cargo = $_POST["cargo"];
        $salario= $_POST["salario"];
        $formato= $_POST["home"];
        $dataLimite = $_POST["limit"];
        $hoje = date('d/m/Y'); 
        $aberta = 1;
        $cep = $_POST["cep"];
        //$habilidadesReq = $_POST["password"];
        $Beneficios = $_POST["message"];

        $gravar = mysqli_query($con, "insert into vaga(titulo, cargo, salario, formato, beneficios, data_pub, data_max, aberta, cnpj_empresa, cep) values('$titulo','$cargo', '$salario', '$formato','$beneficios', '$hoje', '$datalimite', '$aberta' , '$_SESSION['id']' '$cep')");

            
        


        
    }

?>