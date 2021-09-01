<?php

    // CRIANDO FUNÇÕES
    // funçao para calcular operações matemáticas
    // function nome(argumento, recebem os valores e guardo em variaveis locais) usar nomes diferentes das outras variaveis {}
    function calcular($n1, $n2, $tipoCalculo){
        // variaveis locais da funçao 
        $numero1 = (double) 0;
        $numero2 = (double) 0;
        $total = (double) 0;
        $opcaoCalculo = (string) null;

        // Guardando os valores dos argumentos nas variaveis locais na função
        $numero1 = $n1;
        $numero2 = $n2;
        $opcaoCalculo = $tipoCalculo;

        // Verificaçõa para qual tipo de calculo será realizado 
        // SWITCH
        // switch comando (variavel) :teste lógico break; quando encontrar uma opcao valida parar
        // defaut caso o CASE nao esteja valido
        switch ($opcaoCalculo){
            case('SOM'):
                $total = $numero1 + $numero2;
                    break;
            case('SUB'):
                $total = $numero1 - $numero2;
                    break;
            case('MUL'):
                $total = $numero1 * $numero2;
                    break;
            case('DIV'):
                // if para tratar divisao por zero
                if($numero2 == 0)
                    echo(ERRO_DIVISAO_ZERO);
                else
                    $total = $numero1 / $numero2;
                        break;

            // Essa opcao somente sera executada caso nenhuma das opçõe do CASE seja válida
            default:
                echo(ERRO_CAIXA_VAZIA);
        }

        return $total;
    }









?>