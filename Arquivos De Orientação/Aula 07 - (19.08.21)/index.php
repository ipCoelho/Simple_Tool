<?php

    // importando as variaveis de um arquivo externo
    require_once('valores/variaveis.php');

    /*IMPORTAR ARQUIVO EXTERNO NO PHP
        include - mais antigo 
        include_once {_once - apenas importa uma vez}

        require - mais recente
        require_once
    */

    // Import do arquivo de funcoes para realizar calculos
    // require_onde('pasta/arquivo')
    require_once('functions/calculos.php');

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

                    // CHAMADA DA FUNÇÃO CALCULAR, enviando os argumentos de valores e operacao
                    $resultado = calcular($valor1, $valor2, $operacao);
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
                    <input type="radio" name="radioOpe" value="sub" <?= $operacao ==  'SUB'? 'checked' : ''?>> Subtrair
                    <input type="radio" name="radioOpe" value="mul" <?= $operacao ==  'MUL'? 'checked' : ''?>> Multiplicar
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