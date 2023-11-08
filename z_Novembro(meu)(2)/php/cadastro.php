<?php
    session_start();
    include('./conexao.php');
    include('./upload.php');

    if (!empty($_POST)) {
        # code...
        $category = $_POST['category'];
        $nome = $_POST["identity"];
        $cep= $_POST["cep"];
        $fone = $_POST["fone"];
        $email = $_POST["email"];
        $senha = $_POST["password"];
        $bairro_cidade = $_POST["bairro_cidade"];
        $senhaCripto = base64_encode($senha);

        if ($category == "trabalhador") {
            
            echo $category."entrei trabalhador";
            $cpf = $_POST["cpf"];
            $birth =$_POST["birth"];
            

            $gravar = mysqli_query($con, "insert into usuario(email, nome, senha, telefone, cpf, nascimento, cep, bairro_cidade, curriculo) values('$email','$nome', '$senhaCripto', '$fone','$cpf', '$birth', '$cep', '$bairro_cidade', 0)");
            if ($gravar){
                echo "<script>alert('cadastrado com sucesso'); window.location.href = '../HTML/login.html';</script>";

            }else{
                echo "<br/> erro de gravação";
            } 

        }else{
            echo $category."entrei empresa";
            $cnpj = $_POST["cnpj"];
            if (isset($_FILES["logo"]) && !empty($_FILES["logo"])) {
                $imgUploaded =  "../contents/imgs/logoEmpresa/".$_FILES["logo"]["name"];
                move_uploaded_file($_FILES["logo"]["tmp_name"], $imgUploaded);}
            else {
                echo "<script>alert('a imagem não chegou nem a ser enviada')</script>";
                $imgUploaded = "";
            }     

            $gravar = mysqli_query($con, "insert into empresa(cnpj, nome, gmail, senha, telefone, logo, cep, endereco) values('$cnpj', '$nome', '$email','$senhaCripto','$fone', '$imgUploaded', '$cep', '$bairro_cidade', )");
            
            if ($gravar){
                echo "<script>alert('cadastrado com sucesso'); window.location.href = '../HTML/login.html';</script>";
               
            }else{
                echo "<br/> erro de gravação";
            } 
        }


        
    }
?>
?>