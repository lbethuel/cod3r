<div class="titulo">Desafio Meses</div>

<form action="#" method="post">
    <input type="number" name="param" max="12" min="1">
    <button>Buscar</button>
</form>

<?php
$mes = $_POST['param'];
$res = $mes - 1;

$meses = array(
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);

if($mes >= 1 && $mes <= 12){
    echo "<br> Mês: {$meses[$res]}";
    return;
} echo "Mês não encontrado!";




//print_r($meses);

