
<?php
    
    include('conectarPhp.php');

    $cpf = $_POST["cpf"];
    $name = $_POST["nome"];
    $email = $_POST["gmail"];
    $senha = $_POST["senha"];
    $nascimento = $_POST["nascimento"];
    $telefone = $_POST["telefone"];
    
        //gravando no banco
        
        $gravar = mysqli_query($conexao, "insert into usuario(cpf, nome, gmail, senha, data_nascimento, telefone) values('$cpf', '$name', '$email','$senha','$nascimento','$telefone')" );
        if ($gravar){
            echo "<br/>gravação bem sucedida";
            header("location: ../html/site_do_gustavo.html");
        }else{
            echo "<br/> erro degravação";
        }
        
        ?>