<?php
$idade= 16;
$nome= 'Vinicius';
$numerosDepessoas= 2;

echo "Voce so pode entrar se tiver mais do que 18 anos";
echo " ou a partir de 16 anos so acompanhado" .PHP_EOL;

if ($idade >= 18){
    echo "Voce tem $idade anos, pode entrar sozinho.";

}else if($idade >= 16 && $numerosDepessoas > 1){
        echo "Voce so tem $idade anos, esta acompanhado(a), entao pode entrar.";
    }else {
    echo "Nao pode entrar, voce tem $idade anos.";
    }

echo PHP_EOL;

echo "Adeus";