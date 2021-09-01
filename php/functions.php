<?php
// functions

// Calculadora Simples
function somar($n1, $n2){
    $num1 = (double) 0;
    $num2 = (double) 0;
    $num1 = $n1;
    $num2 = $n2;
    return $n1 + $n2;
}
function subtrair($n1, $n2){
    $n1 = (double) 0;
    $n2 = (double) 0;
    $n1 = $n1;
    $n2 = $n2;
    return $n1 - $n2;
}
function multiplicar($n1, $n2){
    $n1 = (double) 0;
    $n2 = (double) 0;
    $n1 = $n1;
    $n2 = $n2;
    return $n1 * $n2;
}
function dividir($n1, $n2){
    $n1 = (double) 0;
    $n2 = (double) 0;
    $n1 = $n1;
    $n2 = $n2;
    return $n1 / $n2;
}
// Calculadora Simples - FIM

// Média
function mediaEntre($n1, $n2, $n3, $n3){
    $n1 = (double) 0;
    $n2 = (double) 0;
    $n3 = (double) 0;
    $n4 = (double) 0;
    $n1 = $n1;
    $n2 = $n2;
    $n3 = $n3;
    $n4 = $n4;
    return ($n1 + $n2 + $n3 + $n4) / 4
}
// Média - FIM

// Tabuada
function calcularTabuadaDo($tabuada, $contador){
    $tabuada = (int) 0;
    $contador = (int) 0;
    $resultado = (int) 0;
    $saida = (String) null;
    $saida = `{$tabuada} x {$contador} = {$resultado}`;
    return $saida;
}
// Tabuada - FIM
?>
