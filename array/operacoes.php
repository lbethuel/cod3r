<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "São Paulo"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

//É array ou não
echo '<br>' . is_array($dadosCompletos);

//Quantos dados tem dentro do array
echo '<br>' . count($dadosCompletos);

echo '<br>';
//sorteio
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";


echo '<br>';

//remoção
unset($dadosCompletos[$indice]);
echo '<br>';
print_r($dadosCompletos);