<div class="titulos">Laço For</div>

<?php

for ($contador = 1; $contador <= 5; $contador++) {
    echo $contador . '<br>';
}

echo " <hr>";

for (; $contador <= 10; $contador++) {
    echo $contador . '<br>';
}

echo " <hr>";

for (; $contador <= 15;) {
    echo $contador . '<br>';
    $contador++;
}
