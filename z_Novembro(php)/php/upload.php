    <?php 
    
       
            if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
                $imgUploaded =  "./uploads/".$_FILES["imagem"]["name"];
                move_uploaded_file($_FILES["imagem"]["tmp_name"], $imgUploaded);
                echo "update realizado com sucesso";
                mysqli_query($con, "insert into empresa(logo) values ('$imgUploaded') where CNPJ = '$CNPJ'");
            }
            else {
                echo "esta fazio!";
            }
        

    ?>
