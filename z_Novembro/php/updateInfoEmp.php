<?php
    session_start();
    include('./conexao.php');
    include('./upload.php');

    if (!empty($_POST)) {
        # code...
        $original = $_SESSION['id'];
        $cnpj = $_POST["cnpj"];
        $category = $_POST['category'];
        $nome = $_POST["identity"];
        $cep= $_POST["cep"];
        $fone = $_POST["fone"];
        $email = $_POST["email"];
        $senha = $_POST["password"];
        $descricao = $_POST['desc1'];
        $descricaoLinha = $_POST['desc2'];
        $bairro_cidade = $_POST["bairro_cidade"];
        $senhaCripto = base64_encode($senha);

    
            
            
            if (isset($_FILES["logo"]) && !empty($_FILES["logo"])) {
                $imgUploaded =  "../contents/imgs/logoEmpresa/".$_FILES["logo"]["name"];
                move_uploaded_file($_FILES["logo"]["tmp_name"], $imgUploaded);}
            else {
                echo "<script>alert('a imagem não chegou nem a ser enviada')</script>";
                $imgUploaded = "";
            }     

            $gravar = mysqli_query($con, "update empresa set cnpj = $cnpj ,nome = , gmail, senha, telefone, logo where cnpj = $original");
            
            if ($gravar){
                echo "<script>alert('cadastrado com sucesso'); window.location.href = '../HTML/login.html';</script>";
               
            }
        


        
    }
?>
?>