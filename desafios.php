<?php
/*
for($x=1;$x<=100;$x++){
    if(($x % 2) != 0){
        echo "$x".PHP_EOL;
    }
}*/

/*for($i=1;$i<=10;$i++){
    $x = 1;
    $mult = $x * $i;
    echo "$x x $i = $mult".PHP_EOL;

}*/

$a = 1.89;
$p = 82;
$imc = 0;

$imc = $p / ($a * 2);

echo "Seu imc e $imc.".PHP_EOL;

if(($imc >= 18.5) && ($imc <= 24.9)){

    echo "Normal".PHP_EOL;
} elseif (($imc >= 25.0) && ($imc <= 29.9)){
    echo "Sobrepeso".PHP_EOL;
}elseif (($imc >= 30) && ($imc <= 39.9)){
    echo "Obesidade".PHP_EOL;
}elseif ($imc >= 40){
    echo "Obesidade 2".PHP_EOL;
}