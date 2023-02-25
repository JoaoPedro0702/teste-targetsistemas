<?php 

$sequencia = array();

$num = 10;
$soma = 0;
$anterior = 0;
$proximo = 1;


for ($i = 1; $i <= $num; $i++) {

    $soma = $anterior + $proximo;
    $anterior = $proximo;
    $proximo = $soma;
    array_push($sequencia, $soma);
}

print_r($sequencia);

if (in_array(8, $sequencia)){
    echo "Existe";
} else {
    echo "Não Existe";
}







