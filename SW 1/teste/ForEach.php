
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">

    </form>
</body>
</html>

<?php 
    $estados = array('SP' => 'São Paulo', 'MG' => 'Minas Gerais', 'PR' => 'Paraná', 'AM' => 'Amazonas', 'AC' => 'Acre');
    foreach ($estados as $Indice => $valores) {
        echo "Sigla: ". $Indice." Valores: ".$valores."<BR/>";
    }
?>