<?php
 
 $frutas = [];
 $i = 0;

 
 for($i = 1; $i <= 5; $i++){
 	echo'Digite a ' . $i. 'ª fruta: ';
 	$frutas[] = (string) fgets(STDIN);
 }
 sort($frutas);
 
 echo'Frutas em Ordem Alfabetica';
 foreach ($frutas as $fruta) {
 	echo'Fruta: ' . $fruta;
};

?>