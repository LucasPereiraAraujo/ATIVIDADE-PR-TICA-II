<?php

function calcula_quadrado($lado){
    return $lado * $lado;
}

function calcula_retangulo($base, $altura){
    return $base * $altura;
}

function calcula_triangulo($base, $altura){
    return ($base * $altura) / 2;
}

$operacao;
$lado;
$altura;
$base;
$resultado;

echo'Qual figura será calculada? Quadrado, triangulo ou retangulo (digite sem acentos)  ';
$operacao = strtolower(trim(fgets(STDIN)));
echo "\n";

switch($operacao){
    case"quadrado":
        echo'Digite o valor do lado do quadrado: ';
        $lado = fgets(STDIN);
        $resultado = calcula_quadrado($lado);
        echo "\n";
        echo'A area de um quadrado com lado ' . $lado . 'é =  ' . $resultado;
        break;
    
    case"retangulo":
        echo'Digite o valor da base do retangulo: ';
        $base= fgets(STDIN);
        echo "\n";
        echo'Agora digite o valor da altura do retangulo: ';
        $altura = fgets(STDIN);
        $resultado = calcula_retangulo($base, $altura);
        echo'A area de um retangulo com base ' . $base . 'e altura ' . $altura . 'é igual = ' . $resultado;
        break;

    case"triangulo":
        echo'Digite o valor da base do triangulo: ';
        $base= fgets(STDIN);
        echo "\n";
        echo'Agora digite o valor da altura do triangulo: ';
        $altura = fgets(STDIN);
        $resultado = calcula_triangulo($base, $altura);
        echo'A area de um triangulo com base ' . $base . 'e altura ' . $altura . 'é igual = ' . $resultado;
        break;

    default:
        echo'Não foi possivel identificar o valor escolhido....';    

}

?>