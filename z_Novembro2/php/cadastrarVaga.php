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
        //$habilidadesReq = $_POST["password"];
        $Beneficios = $_POST["message"];
        $id=$_SESSION['id'];

        echo "isso é o id: ".$id;
        $gravar = mysqli_query($con, 
        "insert into vaga(titulo, cargo, salario, beneficios, data_pub, data_max, aberta, cnpj_empresa, cep) values('$titulo','$cargo', '$salario','$Beneficios', '$hoje', '$dataLimite', '$aberta' , '$id', '$cep')");

            if ($gravar) {
                echo "<script>window.location.href='../HTML/empresa/vagas.php'</script>";
            }
        


        
    }

?>