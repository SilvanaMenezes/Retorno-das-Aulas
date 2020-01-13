<?php

// Incluímos o arquivo de pessoas o require_once exige que o arquivo esteja completo, o includes é mais permissivo
require_once('./includes/pessoas.php');

// Escreva uma função que, recebendo uma pessoa
// como parâmetro, retorne a seguinte frase:
// Olá, eu sou Fulano. Calço xx. Tenho yy anos.
function descrevePessoa($pessoa){
    return "Olá, eu sou {$pessoa['nome']}.
            Calço {$pessoa['tam_pe']}.
            Tenho {$pessoa['idade']} anos.";
}

//$frase = descrevePessoa($pessoas[0]);
//echo ($frase. '<br>');
// faz-se assim para pular linha.

foreach ($pessoas as $p):
    $frase = descrevePessoa($p);
    echo $frase.'<br>';
endforeach;

?>

