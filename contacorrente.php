<?php

/*$conta1= ['titular' => 'Vinicius', 'saldo' => 1000];
$conta2= ['titular' => 'Maria', 'saldo' => 10000];
$conta3= ['titular' => 'Alberto', 'saldo' => 300];*/


$contasCorrentes = [
  /* 12345678910 => $conta1,
  12345648911 => $conta2,
  12325678910 =>  $conta3*/

    '123.456.789-10' => ['titular' => 'Vinicius', 'saldo' => 1000],
    '123.456.489-11' => ['titular' => 'Maria', 'saldo' => 10000],
    '123.256.789-10' => ['titular' => 'Alberto', 'saldo' => 300]
];

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000

];
/*
for($i=0;$i < count($contasCorrentes);$i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;

}*/

foreach ($contasCorrentes as $cpf => $conta){

    echo $conta['titular'].PHP_EOL;
    echo $cpf.PHP_EOL;

}