<?php

/*
Essa função transforma um numero corrido em uma linha digitável formatada para impressão no boleto
ver exemplos comentados abaixo
*/

function retornaLDFormatada($numero){
// $numero = "00190000090262544400100001967173677220000000188";
// saida
// 99999.99999 99999.999999 99999.999999 9 99999999999999
// 012345678901234567890123456789012345678901234567890123
//
// 00190.00009 02625.444001 00001.967173 6 77220000000188
// 00190.00009 02625.444001 10000.196717 6 77220000000188

$p1 = substr($numero, 0, 5);
$p2 = substr($numero, 5, 5);
$p3 = substr($numero, 10, 5);
$p4 = substr($numero, 15, 6);
$p5 = substr($numero, 20, 5);
$p6 = substr($numero, 25, 6);
$p7 = substr($numero, 32, 1);
$p8 = substr($numero, 33, 14);

$result = $p1.".".$p2." ".$p3.".".$p4." ".$p5.".".$p6." ".$p7." ".$p8;

return $result;
}
