<?php

for ($x=1;$x<=15;$x++){
    if($x==1){
        $nome = "Tulio";
    }else if($x == 2){
        $nome = "Kah";
    }
    echo "Aluno numero $x esta presente, seu nome e $nome";
    echo PHP_EOL;
}