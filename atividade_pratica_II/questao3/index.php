<?php

$produtos = [
    ["Nome" => "Teclado", "Quantidade" => 2, "Preco" => 50.00],
    ["Nome" => "Mouse", "Quantidade" => 10, "Preco" => 35.00],
    ["Nome" => "Monitor", "Quantidade" => 1, "Preco" => 600.00]
    ];
    
    
            echo str_pad("Nome", 15);
            echo str_pad("Quantidade", 15);
            echo str_pad("Preço", 15);
            echo str_pad("Total", 15);
            
            echo"\n";
            
            
    foreach($produtos as $produto) {
        
        
        $total = $produto["Quantidade"] * $produto["Preco"];
        
        foreach($produto as $chave => $valor){
            echo str_pad($valor, 15);
        
        }
        
        echo"R$ $total";
        
        echo"\n";
    };

?>