<?php
 
 $numeros = [];
 $i = 0;
 $par = [];
 $impar = [];

 
 echo'Digite 10 numeros   ';
 
 for($i = 1; $i <= 10; $i++){
 	echo'Digite o ' . $i. 'º numero: ';
 	$numeros[] = (int) fgets(STDIN);
 }
 
 echo'Dividido em pares e impares   ';
 
 foreach ($numeros as $numero) {
 	if($numero % 2 == 0){
 	    $par[] = $numero;
 	} else {
 	    $impar[] = $numero;
 	}
 }
 
 echo'Numeros pares:  ';
 
 foreach($par as $par){
     echo$par . ' ';
 }
 

 
  echo'Numeros impares: ';
  
  foreach($impar as $impar){
     echo $impar . ' ';
  };
?>