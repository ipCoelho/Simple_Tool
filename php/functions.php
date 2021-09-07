<?php
// variáveis
$num1 = (string) null;
$num2 = (string) null;
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
// variáveis do ImparPar
$inicio = (int) 0;
$fim = (int) 0;
$index = (int) 0;
$par = (string) '(...)';
$impar = (string) '(...)';
$qntPar = (int) 0;
$qntImpar = (int) 0;

// msgs de Erro
$erro = (string) null;
const ERRO_DADOS_NAO_NUMERICOS = "<span class='msgErro'>Valores não numéricos!</span>";
const ERRO_CAIXA_VAZIA = "<span class='msgErro'>Caixas Vazias!</span>";
const ERRO_TABUADA_ZERO = "<span class='msgErro'>Tabuada do Zero!</span>";
const ERRO_FINAL_MENOR = "<span class='msgErro'>Valor inicial deve ser menos que o valor final!</span>";
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
    }
    elseif($operacao == 'MUL'){
        $resultado = $num1 * $num2;
    }
    elseif($operacao == 'DIV'){
        $resultado = round($num1 / $num2, 5);
        $resultado;
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

// Impar Par
function repetirSelect($selectInicial, $selectFinal){
    $inicial = $selectInicial;
    $final = $selectFinal;
    for($index = $inicial; $index <= $final; $index++){
        $option = $option.'<option value="'.$index.'">'.$index.'</option>';
    }
    return $option;
}
// Impar Par - FIM

// TRATAMENTO DE ERROS
function tratarErros(){
    if ($inicio == "" || $final == "") {$erro = ERRO_CAIXA_VAZIA;} else
    if ($inicio >= $final) {$erro = ERRO_FINAL_MENOR;} else
    if (!is_numeric($inicio) && !is_numeric($final)) {$erro = ERRO_DADOS_NAO_NUMERICOS;} else {}
}
?>

