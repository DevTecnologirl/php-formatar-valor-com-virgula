<?php

echo "BANCO <br>";

$saldo = 200;
$deposito = 1970.80;

$saldo = $saldo + $deposito;
echo "Saldo: " . number_format($saldo, 2, ",", ".") . "<br><br>";

?>