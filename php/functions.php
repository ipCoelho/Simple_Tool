<?php
// functions

// Calculadora Simples
function somar($n1, $n2){
<<<<<<< HEAD
    $num1 = $n1;
    $num2 = $n2;
    return $num1 + $num2;
}
function subtrair($n1, $n2){
    $num1 = $n1;
    $num2 = $n2;
    return $num1 - $num2;
}
function multiplicar($n1, $n2){
    $num1 = $n1;
    $num2 = $n2;
    return $num1 * $num2;
}
function dividir($n1, $n2){
    $num1 = $n1;
    $num2 = $n2;
    return $num1 / $num2;
=======
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
>>>>>>> c9d382f2b27ddc08453f01e6b286df023f9ca65c
}
// Calculadora Simples - FIM

// Média
<<<<<<< HEAD
function mediaEntre($numero1, $numero2, $numero3, $numero4){
    $n1 = $numero1;
    $n2 = $numero2;
    $n3 = $numero3;
    $n4 = $numero4;
    return ($n1 + $n2 + $n3 + $n4) / 4;
=======
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
>>>>>>> c9d382f2b27ddc08453f01e6b286df023f9ca65c
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
