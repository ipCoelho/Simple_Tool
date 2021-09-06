<?php
// variáveis
$num1 = (double) null;
$num2 = (double) null;
$operacao = (string) null;
$resultado = (string) null;
$erro = (string) null;
$sltSom = (string) null; 
$sltSub = (string) null;
$sltMul = (string) null;
$sltDiv = (string) null;
// variáveis da Tabuada
$tabuada = (int) 0;
$contador = (int) 0;
$indice = (int) 0;
$equacao = (string) null;

// msgs de Erro
$erro = (string) null;
const ERRO_DADOS_NAO_NUMERICOS = "<span class='msgErro'>Valores não numéricos!</span>";
const ERRO_CAIXA_VAZIA = "<span class='msgErro'>Caixas Vazias!</span>";
const ERRO_TABUADA_ZERO = "<span class='msgErro'>Tabuada do Zero!</span>";
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
    return round($saida, 2);
}
// Tabuada - FIM
?>

