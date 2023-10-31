<?php 
    session_start();

    if(
        !isset($_SESSION) 
        || $_SESSION =="" 
        || $_SESSION == null 
        || !isset($_SESSION["id"]) 
        || $_SESSION["id"] =="" 
        || $_SESSION["id"] ==" " 
        || $_SESSION["id"] == null 
        || empty($_SESSION["id"])
        || $_SESSION['Pudim7w7'] != true

        ){  echo "to aqui";
            header('Location: ../../html/login.html');}

    include('./conexao.php');

    
        # code...
        $id_vaga = $_GET['id'];
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
        "UPDATE vaga SET titulo = '$titulo', responsabilidades = '$cargo', salario = '$salario', beneficios = '$Beneficios', data_max = '$dataLimite', cep = '$cep' where id_vaga=$id_vaga");

            if ($gravar) {
                echo "<br/>entrei aqui
                    <script>  </script>
                ";

                header('location:./empresa/editarVagas_requisitos.php?idVaga='.$id_vaga);
            }
        


        
    

?>