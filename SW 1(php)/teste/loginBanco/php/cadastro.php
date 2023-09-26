
<?php
    
    include('conectarPhp.php');

    $cpf = $_POST["cpf"];
    $name = $_POST["nome"];
    $email = $_POST["gmail"];
    $senha = $_POST["senha"];
    $nascimento = $_POST["nascimento"];
    $telefone = $_POST["telefone"];
    $tipoErro = "";
    $permicao = 1;
    $senhaCripto = base64_encode($senha);

        //gravando no banco
        
    $quantosCpf = mysqli_query($conexao, "select * from usuario where cpf = '$cpf'");
    $quantosEmail = mysqli_query($conexao, "select * from usuario where gmail = '$email'");

    if(mysqli_num_rows($quantosCpf)>0){
        echo "<script>alert('CPF ja cadastrado!'); window.location.href = '../html/cadastro.html'</script>";
    }
    else if(mysqli_num_rows($quantosEmail)>0){
        echo "<script>alert('Email ja cadastrado!'); window.location.href = '../html/cadastro.html'</script>";
    }
    else{
        $gravar = mysqli_query($conexao, "insert into usuario(cpf, nome, gmail, senha, data_nascimento, telefone) values('$cpf', '$name', '$email','$senhaCripto','$nascimento','$telefone')" );
        header("location: ../html/site_do_gustavo.html");
    }
    

        
        ?>