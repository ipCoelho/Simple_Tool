<?php

// Declarando uma variavel e defenindo seu tipo de dado
$valor1 = (double) 0;
$valor2 = (double) 0;
$resultado = (double) 0;
$operacao = (string) null;
$chkSubtrair = (string) null;
$chkMultiplicar = (string) null;

// Criando constantes para o projeto
// Forma 01 de criar uma constante define('NOME_CONSTANTE') , 'mensagem';
define('ERRO_CAIXA_VAZIA' , "<span class='msgErro'> Não é possível calcular sem preencher todos os dados!</span>");
// Forma 02 de criar uma constante
const ERRO_DADOS_NAO_NUMERICOS = "<span class='msgErro'> Não é possível realizar calculos com valores não numéricos</span>";

/* 
    TIPOS DE DADOS
    string - Texto
    int ou interger - Numerico inteiro
    double - Numerico com casas decimais (capacidade maior de armazenamento)
    float -  Numerico com casas decimais (capacidade menor de armazenamento)
    boolean ou bool - Tipo de dados (TRUE/FALSE)
    array - Para vetores e matrizes
    object - Para referenciar um objeto
*/

    // Validação se o botão calcular foi acionado
    if(isset($_POST['btnCalcular'])){

        // empty()permite verificar se um elemento é vazio
        //if(empty($_POST['txtValorUm']) || empty($_POST['txtValorDois'] == "")) 

        // Validação para caixa vazias
        if($_POST['txtValorUm'] == "" || $_POST['txtValorDois'] == ""){
            echo (ERRO_CAIXA_VAZIA);
        }    
        else{

            // Resgatando valores do formulário HTML
            $valor1 = $_POST['txtValorUm'];
            $valor2 = $_POST['txtValorDois'];

            // strtoupper() maiusculo
            // strtolower() minusculo

            // Validação para a escolha de uma operaçao de calculo
            if(isset($_POST['radioOpe'])){

                // Resgata o valor do radio e converte a escrita para maiusculo
                $operacao = strtoupper($_POST['radioOpe']);

                // Validação para vereficar se os dados são numericos
                if(is_numeric($valor1) && is_numeric($valor2)){

                    // Validação para identificar os tipos de calculos
                    if($operacao == 'SOM'){
                        $resultado = $valor1 + $valor2;
                    }
                    elseif($operacao == 'SUB'){
                        $resultado = $valor1 - $valor2;
                        // checar o radio
                        $chkSubtrair = 'checked';
                    }
                    elseif($operacao == 'MUL'){
                        $resultado = $valor1 * $valor2;
                        // checar o radio
                        $chkMultiplicar = 'checked';
                    }
                    elseif($operacao == 'DIV'){
                        $resultado = $valor1 / $valor2;
                    }
                }
                else
                    echo(ERRO_DADOS_NAO_NUMERICOS);
            }
            else
                echo(ERRO_CAIXA_VAZIA);
        }   
    }
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <div>
        <form name="Calculadora" action="" method="post">
            
            <header>
                <h1>Calculadora Simples</h1>
            </header>
        
            <main>
                <div class="valores">
                    <label>Valor1:</label>
                    <input type="text" name="txtValorUm" size="15" value="<?=$valor1?>">
                </div>
                <div class="valores">
                    <label>Valor2:</label>
                    <input type="text" name="txtValorDois" size="15" value="<?=$valor2?>">
                </div>
            

                <div>
                                                                    <!-- manter o radio checado -->
                    <input type="radio" name="radioOpe" value="som" <?php if($operacao == 'SOM') echo('checked');?>> Somar
                    <input type="radio" name="radioOpe" value="sub" <?= $chkSubtrair?>> Subtrair
                    <input type="radio" name="radioOpe" value="mul" <?= $chkMultiplicar?>> Multiplicar
                    <input type="radio" name="radioOpe" value="div" <?= $operacao == 'DIV'? 'checked' : ''?>> Dividir
                </div>
      
                <input id="botao" type="submit" name="btnCalcular" value="Calcular">
                
                
                <div id="resultado">
                    <?=$resultado;?>            
                </div>
            </main>
        </form>
    </div>
</body>
</html>