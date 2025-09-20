<?php

function c_to_f($temperatura){
    return ($temperatura * 1.8) + 32;
}

function f_to_c($temperatura){
    return ($temperatura - 32) * 5/9;
}

$temperatura;
$operacao;
$resultado;

echo 'Qual a temperatura (apenas numero): ';
$temperatura = fgets(STDIN);


echo 'Qual a operação a ser realizada? ';
echo 'Converter para celsius (Digite C) ou converter para Fahrenheit (Digite F): ';
$operacao = trim(fgets(STDIN));

switch($operacao){
    case "C":
        $resultado = c_to_f($temperatura);
        echo 'O resultado da conversão de ' . $temperatura . '°C para Fahrenheit é: '. $resultado . '°F';
        break;
    
    case "F":
        $resultado = f_to_c($temperatura);
        echo 'O resultado da conversão de ' . $temperatura . '°F para Celsius é: '. $resultado . '°C';
        break;
        
    default:
        echo 'Sua resposta não foi válida';
};

?>
