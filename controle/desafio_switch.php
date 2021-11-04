<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="number" name="param">
    <select name="conversao" id="conversao" min="1" max="999">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php

echo $_POST['param'] . "<br>";
//echo $_POST['conversao'];

$valor = $_POST['param'];
$tipo = $_POST['conversao'];

const KM_MILHA = 0.621371;
const METRO_KM = 1000;

/* echo $valor;
echo $tipo; */
//var_dump($tipo);
switch (strtolower($tipo)) {
    case 'km-milha':
        $response = ($valor * KM_MILHA);
        $response = number_format($response, 2, ',', '');
        echo $response . " milhas";
        break;

    case 'milha-km':
        $response = $valor / KM_MILHA;
        $response = number_format($response, 2, ',', '');
        echo $response . " km";
        break;

    case 'metro-km':
        $response = $valor / METRO_KM;
        $response = number_format($response, 2, ',', '');
        echo $response . " km";
        break;

    case 'km-metro':
        $response = $valor * METRO_KM;
        $response = number_format($response, 2, ',', '');
        echo $response . " km";
        break;

    case 'cel-fah':
        $response = ($valor * 9/5) + 32;
        $response = number_format($response, 1, ',', '');
        echo $response . " °F";
        break;

    case 'fah-cel':
        $response = ($valor - 32) * 5/9;
        $response = number_format($response, 1, ',', '');
        echo $response . " °C";
        break;
}
