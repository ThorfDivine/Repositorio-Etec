<?php 
    session_start();
    include('./conexao.php');

    if (!empty($_POST)) {
        # code...
        $titulo = $_POST['titulo'];
        $cargo = $_POST["cargo"];
        $salario= $_POST["salario"];
        //$formato= $_POST["home"];
        $dataLimite = $_POST["limit"];
        $hoje = date('d/m/Y'); 
        $aberta = 1;
        $cep = $_POST["cep"];
        $bairro= $_POST['bairro'];
        $cidade= $_POST['cidade'];
        $estado= $_POST['estado'];
        $rua= $_POST['rua'];
        $endereco = $estado+", "+$cidade+", "+$bairro+", "+$rua;
        $Beneficios = $_POST["message"];
        $id=$_SESSION['id'];

    
        $gravar = mysqli_query($con,  "insert into vaga(titulo, responsabilidades, salario, beneficios, data_pub, data_max, aberta, cnpj_empresa, cep, endereco) values('$titulo','$cargo', '$salario','$Beneficios', '$hoje', '$dataLimite', '$aberta' , '$id', '$cep', '$endereco')");

            if ($gravar) {
                $idVaga = mysqli_insert_id($con);        
                echo "<script>window.location.href='./empresa/editarVagas_requisitos.php?idVaga=$idVaga'</script>";
            }
        


        
    }

?>