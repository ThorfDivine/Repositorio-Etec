    <?php 
    
       
            if (isset($_FILES["certificados"]) && !empty($_FILES["certificado"])) {

                $imgUploaded =  "../contents/certificados/".$_FILES["certificado"]["name"];
                move_uploaded_file($_FILES["certificado"]["tmp_name"], $imgUploaded);
                $cpf = $_SESSION['cpf'];

                mysqli_query($con, "insert into certificados(caminho, id_user) values ('$imgUploaded', '$cpf' )");

            }
            else {
                echo "<script>alert('a imagem não chegou nem a ser enviada'); window.location.href = \"./funcionario/certificados.php\";</script>";

            }
        

    ?>
