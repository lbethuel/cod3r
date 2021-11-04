<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 na Terça-feira:</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 na Quinta-feira:</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php

$trabalho1 = !!$_POST['t1'];
$trabalho2 = !!$_POST['t2'];

// var_dump($trabalho1);  
if ($trabalho1 == true && $trabalho2 == true) {
    echo "Vamos comprar TV de 50pol";
    echo "<br>";
    echo "Vamos tomar sorvete \o/";
    echo "<br>";
    return;
}

if ($trabalho1 == true xor $trabalho2 == true) {
    echo "Vamos comprar TV de 32pol";
    echo "<br>";
    echo "Vamos tomar sorvete \o/";
    echo "<br>";
    return;
}

if ($trabalho1 == false && $trabalho2 == false) {
    echo "Vamos fica em casa e economizar!! :/";
    return;
}
