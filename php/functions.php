<?php
// functions

// Calculadora Simples
function calcular($n1, $n2, $op){
    $num1 = $n1;
    $num2 = $n2;
    $resultado = (string) null; 
    $operacao = strtoupper($op);
    if($operacao == 'SOM'){
        $resultado = $num1 + $num2;
    }
    elseif($operacao == 'SUB'){
        $resultado = $num1 - $num2;
        // $chkSubtrair = 'checked';
    }
    elseif($operacao == 'MUL'){
        $resultado = $num1 * $num2;
        // chkMultiplicar = 'checked';
    }
    elseif($operacao == 'DIV'){
        $resultado = $num1 / $num2;
    }
    return $resultado;
}
// Calculadora Simples - FIM

// Média
function mediaEntre($numero1, $numero2, $numero3, $numero4){
    $n1 = $numero1;
    $n2 = $numero2;
    $n3 = $numero3;
    $n4 = $numero4;
    return ($n1 + $n2 + $n3 + $n4) / 4;
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
