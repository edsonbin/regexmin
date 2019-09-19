<?php
$string = "Melhor preço sem escalas R$ 1.367(1)
Melhor preço com escalas R$ 994 (1)

1 - Incluindo todas as taxas.";

//$valor = max(preg_split('/\D+/', $string, -1, PREG_SPLIT_NO_EMPTY));
$valor = preg_split('/[^0-9]+[\.]?[0-9]*/', $string, -1, PREG_SPLIT_NO_EMPTY);

print_r($valor);



