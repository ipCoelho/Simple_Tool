<?php 
    $valor1 = (int) 0;
    $cont = (int) 0; // Está variável tem a mesma função do 'i' (index) em java, de contar os 'passos' dos laços.
    if (isset($_POST['btnCalcular'])){
        $valor1 = $_POST['txtNumero'];
/*          while ($cont <= $valor1) {          // Exemplo de utilização do laço While
            echo($cont . "<br>");
            $cont += 1; }     /*        Sintáxe: Operador Reduzido = '$cont += 1;' | Sintáxe: Padrão = '$cont = $cont + 1;' | Sintáxe: Acréscimo = '$cont++;' */
        
        for ($cont = 0; $cont <= $valor1; $cont++){
            echo($cont . '<br>');
        }
    }
?>

<!-- Operador de módulo em PhP = 'mod' | Sintáxe: 9mod2 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Estruturas de Repetição</title>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <main>
        <form action="index.php" method="post" name="frmRepeticao">
            <label for="txtNumero">Escolha um número</label>
            <input type="text" name="txtNumero" value="">
            <input type="submit" name="btnCalcular" value="Calcular">
        </form>
    </main>
    <footer></footer>
</body>
</html>