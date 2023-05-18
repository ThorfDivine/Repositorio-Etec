<?php

 $informatica[0]="a";
 $informatica[1]="b";
 $informatica[2]="c";
 $informatica[3]="d";
 $informatica[4]="e";

 echo $informatica[2];
//segundo teste
 $informatica2=array(0=>'a', 1=>'b',2=>'c', 3=>'d', 4=>'e');


 echo $informatica2[2];
 //terceiro tipo
 $informatica3 = array('a', 'b', 'c', 'd', 'e');

 echo $informatica3[2];

 //quarto tipo
 $carro = array('modelo' => 'BMW','cor' => 'azul', 'placa' => 'ASD1234');
 echo "<br/>";

 echo $carro['modelo'];
 //primeiro tipo com nomes
 $carro2['modelo'] = 'ferrari';
 $carro2['cor'] = 'vermelha';
 $carro2['placa'] = 'FER4151';

 echo "<br/> ".$carro2['cor'];

//teste

$frutas = array('manga', 'maça', 'goiaba', 'abacaxi', 'uva', 'banana', 'melancia', 'fruta do conde', 'blueberry', 'tomate', 'caqui', 'abacate', 'pitaia', 'guarana', 'pepino', 'jaca', 'laranja', 'maracuja');
$final = count($frutas);
echo "<br/>".$final;
$inicio = 0;

echo "<br> <hr>";
    echo "for";
echo "<hr>";

for ($i=0; $i < $final ; $i++) { 
    echo "<br/>for: ".$frutas[$i];
}
echo "<br> <hr>";
    echo "while";
echo "<hr>";

while($inicio < $final){
    echo "<br/> while: ".$frutas[$inicio];
    $inicio++;
}

foreach ($variable as $key => $value) {
    # code...
}

?>