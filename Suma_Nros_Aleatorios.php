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
$sum=0;
echo "Conjunto: ";
foreach ($enteros as $ind => $valor)
{
echo $valor," / ";
$sum+=$enteros[$ind];
}
echo "<br><br>La suma de los 200 numeros enteros es: ",$sum;
?>