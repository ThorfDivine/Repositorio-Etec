<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        if (isset($_POST['acao'])) {
            if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
                $imgUploaded =  "./uploads/".$_FILES["imagem"]["name"];
                move_uploaded_file($_FILES["imagem"]["tmp_name"], $imgUploaded);
                echo "update realizado com sucesso";
                mysqli_query($con, "insert into empresa(logo) values ('$imgUploaded') where CNPJ = '$CNPJ'");
            }
            else {
                echo "esta fazio!";
            }
        }

    ?>


    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="imagem" accept="image/*"> <br>
        <input type="submit" name="acao" value="enviar">
    </form>
</body>
</html>