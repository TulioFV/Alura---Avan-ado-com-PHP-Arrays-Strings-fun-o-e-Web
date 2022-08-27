<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorASacar): array
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Voce nao pode sacar");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;

    }else{
        exibeMensagem("Depositos precisam ser positivos.");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)/*O & pega o endereco de memoria onde esta a conta, pega o valor em si*/
{
      $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
   echo "<li>Titular: $titular. Saldo: $saldo</li>";
}


