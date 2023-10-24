<?php 
    session_start();
    include('./conexao.php');

    if (!empty($_POST)) {
        # code...
        $id_vaga = $_POST['id_vaga'];
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
        "UPDATE vaga SET titulo = '$titulo', responsabilidades = '$cargo', salario = '$salario', beneficios = '$Beneficios', data_max = '$dataLimite', cep = '$cep' where id_vaga='$id_vaga'");

            if ($gravar) {
                echo "<script>window.location.href='../HTML/empresa/vagas.php'</script>";
            }
        


        
    }

?>