<?php
    // Zerando a variável para não dar erro, pois o valor não existe.
    $media = 0;
    $nota1 = null;
    $nota2 = null;
    $nota3 = null;
    $nota4 = null;
    // O php só inicia quando o botão 'btnCalcular' é pressionado.
    if(isset($_POST['btnCalcular'])){
        // Pegando os valores dos <input> por $_POST.
        $nota1 = $_POST['txtNotaUm'];
        $nota2 = $_POST['txtNotaDois'];
        $nota3 = $_POST['txtNotaTres'];
        $nota4 = $_POST['txtNotaQuatro'];
        // Calculo da média, e atribuindo á $media.
        // $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        if ($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == "") {
            echo("
                <script> alert('Caixas Vazias') </script>"
            );
        }
        else {
            if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)) {
                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            }
            else{
                echo("
                    <script>
                        alert('Não foi possível calcular com dados não numéricos!')
                    </script>
                ");
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Médias</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div>
        <header>
            <h1>Calculo de Médias</h1>
        </header>
        <main>
            <form method="post" action="" name="frmMedia">
                <div>
                    <div class="notas">
                        <label for="nota1">Nota 1: </label>
                        <input type="text" name="txtNotaUm" value="<?=$nota1?>" maxlength="2" size="30">
                    </div>
                    <div class="notas">
                        <label for="nota2">Nota 2: </label>
                        <input type="text" name="txtNotaDois" value="<?=$nota2?>" maxlength="2" size="30">
                    </div>
                    <div class="notas">
                        <label for="nota3">Nota 3: </label>
                        <input type="text" name="txtNotaTres" value="<?=$nota3?>" maxlength="2" size="30">
                    </div>
                    <div class="notas">
                        <label for="nota4">Nota 4: </label>
                        <input type="text" name="txtNotaQuatro" value="<?=$nota4?>" maxlength="2" size="30">
                    </div>
                    <div class="notas">
                        <label for="btnCalcular"></label>
                        <input type="submit" value="CALCULAR" id="btnCalcular" name="btnCalcular">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <label for="media">
                <!-- a abertura do php pode ser aberta em qualquer lugar. -->
                A média é: <?php echo($media); ?> 
            </label>
        </footer>    
    </div>
</body>
</html>