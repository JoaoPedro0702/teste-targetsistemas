<?php
$faturamento_diario = array(31490.7866, 37277.9400, 37708.4303, 17934.2269, 6965.1262, 24390.9374, 14279.6481, 39807.6622, 27261.6304, 39775.6434, 29797.6232, 17216.5017, 12974.2000, 28490.9861, 8748.0937, 8889.0023, 17767.5583, 3071.3283, 48275.2994, 10299.6761, 39847.1073);


$menor_valor = min($faturamento_diario);
echo "Menor valor de faturamento: " . $menor_valor . "\n";

$maior_valor = max($faturamento_diario);
echo "Maior valor de faturamento: " . $maior_valor . "\n";

$soma_faturamento = array_sum($faturamento_diario);
$media_mensal = $soma_faturamento / count($faturamento_diario);

$num_dias_superior_media = 0;
foreach ($faturamento_diario as $valor) {
  if ($valor > $media_mensal) {
    $num_dias_superior_media++;
  }
}
echo "Número de dias com faturamento superior à média mensal: " . $num_dias_superior_media . "\n";
?>
