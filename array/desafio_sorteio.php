<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = [
    "Elza",
    "Rapunzel",
    "Branca de neve",
    "Cinderela"
];

$indice = array_rand($nomes);
echo "<h1> $nomes[$indice]</h1>";

