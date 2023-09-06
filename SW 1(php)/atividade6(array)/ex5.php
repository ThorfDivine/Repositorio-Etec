<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <hr>
        <input type="submit" value="gerar 1 veículo aleatorio de cada marca: ">
    </form>
</body>
</html>

<?php


@$arrayName = array(
   'VW' => array('1' =>  'jetta', '2' => 'voyage', '3' => 'passati', '4' => 'golf'),
   'GM' => array('1' => 'camaro', '2' => 'camaro', '3' => 'onix', '4' => 'celta'),
   'Fiat' => array('1' => 'Uno', '2' => 'up', '3' => 'cronos', '4' => 'mobi'),
   'Ford'=> array('1' => 'fusion','2' => 'KA','3' => 'Fiesta','4' => 'ranger'),
);

        echo 'VM: '.$arrayName['VW'][rand( 1 , 4)]."<br/>";
        echo 'GM: '.$arrayName['GM'][rand( 1, 4)]."<br/>";
        echo 'Fiat: '.$arrayName['Fiat'][rand( 1, 4)]."<br/>";
        echo 'Ford: '.$arrayName['Ford'][rand( 1, 4)]."<br/>";
    
  



?>