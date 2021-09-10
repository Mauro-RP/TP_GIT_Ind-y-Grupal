<?php
/* Dados como datos 200 números enteros (hacerlo aleatorios entre -200 y 200),
 obtener y mostrar su suma.*/
function Conjunto($n)
{
    $conjunto=array();
    for ($i=0; $i < $n; $i++) 
    { 
        $conjunto[$i] = rand(-200,200);
    }
    return $conjunto;
}

$enteros = Conjunto(200);
$sum = 0;
for ($i=0; $i < 200 ; $i++) 
{
    $sum+=$enteros[$i];
}
?>