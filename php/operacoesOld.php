<?php
// Declaração das variáveis
$valor1 = (double) 0;
$valor2 = (double) 0;
$resultado = (double) 0;
$operacao = (string) null;
$chkSubtrair = (string) null;
// Mensagens de erro
define('ERRO_CAIXA_VAZIA' , "<span class='msgErro'> Não é possível calcular sem preencher todos os dados!</span>");
const ERRO_DADOS_NAO_NUMERICOS = "<span class='msgErro'> Não é possível realizar calculos com valores não numéricos</span>";
    // 'is set' do botão calcular
    if(isset($_POST['btnCalcular'])){
        if($_POST['txtValorUm'] == "" || $_POST['txtValorDois'] == ""){
            echo (ERRO_CAIXA_VAZIA);
        }    
        else{
            $valor1 = $_POST['txtValorUm'];
            $valor2 = $_POST['txtValorDois'];

            if(isset($_POST['radioOpe'])){
                $operacao = strtoupper($_POST['radioOpe']);
                
                if(is_numeric($valor1) && is_numeric($valor2)){
                    if($operacao == 'SOM'){
                        $resultado = $valor1 + $valor2;
                    }
                    elseif($operacao == 'SUB'){
                        $resultado = $valor1 - $valor2;
                        $chkSubtrair = 'checked';
                    }
                    elseif($operacao == 'MUL'){
                        $resultado = $valor1 * $valor2;
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

