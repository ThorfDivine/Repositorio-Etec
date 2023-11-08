<?php
    session_start();
    include('./conexao.php');
    include('./upload.php');

    if (!empty($_POST)) {
        # code...
        $original = $_SESSION['id'];
        $cnpj = $_POST["cnpj"];
        $nome = $_POST["nome"];
        $cep= $_POST["cep"];
        $fone = $_POST["fone"];
        $email = $_POST["email"];
        $senha = $_POST["pass"];
        $descricao = $_POST['desc2'];
        $descricaoLinha = $_POST['desc1'];
        $senhaCripto = base64_encode($senha);

    
            
            
            if (isset($_FILES["logo"]) || !empty($_FILES["logo"])) {
                $imgUploaded =  "../contents/imgs/logoEmpresa/".$_FILES["logo"]["name"];
                move_uploaded_file($_FILES["logo"]["tmp_name"], $imgUploaded);}
            else {
                echo "<script>alert('a imagem não chegou nem a ser enviada')</script>";
                $imgUploaded = "../../contents/imgs/3106921.png";}     

            $gravar = mysqli_query($con, "update empresa set cnpj = '$cnpj', cep = '$cep', nome = '$nome', gmail = '$email', logo = '$imgUploaded', senha = '$senhaCripto', telefone = '$fone', descricao = '$descricao', descricaoLinha = '$descricaoLinha' where cnpj = '$original'");
     

            
            if ($gravar){
                echo "<script>alert('atualizado com sucesso'); window.location.href = './empresa/areaDoUsuario.php';</script>";
            }
        


        
    }
?>
?>