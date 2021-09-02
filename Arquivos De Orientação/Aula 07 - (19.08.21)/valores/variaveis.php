<?php

    // DECLARAÇÃO DE VARIAVEIS DO PROJETO
    // Declarando uma variavel e defenindo seu tipo de dado
    $valor1 = (double) 0;
    $valor2 = (double) 0;
    $resultado = (double) 0;
    $operacao = (string) null;
    $chkSubtrair = (string) null;
    $chkMultiplicar = (string) null;

    // DECLARAÇÃO DE CONSTANTES DO PROJETO
    // Criando constantes para o projeto
    // Forma 01 de criar uma constante define('NOME_CONSTANTE') , 'mensagem';
    define('ERRO_CAIXA_VAZIA' , "<span class='msgErro'> Não é possível calcular sem preencher todos os dados!</span>");
    // Forma 02 de criar uma constante
    const ERRO_DADOS_NAO_NUMERICOS = "<span class='msgErro'> Não é possível realizar calculos com valores não numéricos</span>";

    const ERRO_DIVISAO_ZERO = "<span class='msgErro'> Impossível realizar uma divisão por zero!</span>";

?>