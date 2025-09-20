<?php

$matriz1 = [];
$matriz2 = [];
$resultado = [];

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        echo "Digite o numero de posicao matriz1[$i][$j]: ";
        $matriz1[$i][$j] = (int) fgets(STDIN);
    };
};

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        echo "Digite o numero de posicao matriz2[$i][$j]: ";
        $matriz2[$i][$j] = (int) fgets(STDIN);
    };
};

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
    };
};

echo "\n";
echo'Resultado da soma';
echo"\n";
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        echo"resultado[$i][$j]: " . $resultado[$i][$j];
        echo"\n";
    };
};

?>