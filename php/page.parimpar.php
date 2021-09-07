<?php
    require_once('functions.php');

    if(isset($_POST['btnCalcular'])){
        $inicio = $_POST['sltInicial'];
        $final = $_POST['sltFinal'];
        if ($inicio == "" || $final == "") {$erro = ERRO_CAIXA_VAZIA;} else
        if ($inicio >= $final) {$erro = ERRO_FINAL_MENOR;} else
        if (!is_numeric($inicio) && !is_numeric($final)) {$erro = ERRO_DADOS_NAO_NUMERICOS;} else
        for($index = $inicio; $index <= $final; $index++){
            if($index % 2 == 0){
                $par = $par.", ".$index; 
                $qntPar++;
            }
            else{
                $impar = $impar.", ".$index; 
                $qntImpar++;
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
    <title>Simple Tool</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,600;1,400;1,500&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/parimpar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
    <header>
        <div class="menu">
            <div class="submenu">
                <div class="menuItem"><a href="page.operacoes.php">Operações Simples</a></div>
                <div class="menuItem"><a href="page.media.php">Média</a></div>
                <div class="menuItem"><a href="page.tabuada.php">Tabuada</a></div>
                <div class="menuItem"><a href="page.parimpar.php">Par e Impar</a></div>
            </div>
        </div>
    </header>
    <main>
        <section class="div-main">
            <form action="" method="post">
                <div class="box-entrada">
                    <div class="box-select">
                        <label for="sltInicial">Início:</label>
                        <select name="sltInicial" class="select">
                            <option value="">Selecione...</option>
                            <?php
                                for($index = 0; $index <= 500; $index++){
                                    echo('<option value="'.$index.'">'.$index.'</option>');
                                }
                            ?>
                        </select>
                        <label for="sltFinal">Final:</label>
                        <select name="sltFinal" class="select">
                            <option value="">Selecione...</option>
                            <?php
                                for($index = 100; $index <= 1000; $index++){
                                    echo('<option value="'.$index.'">'.$index.'</option>');
                                }
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="btnCalcular" id="button-contar">Contar</button>
                </div>
            </form>
            <div class="box-saida">
                <div class="box-pares">
                    <h3>Números Pares</h3>
                    <div class="box-saida-numeros"><?=$par."."?></div>
                    <div class="box-qnt-pares"><span><?=$qntPar?></span> números pares.</div>
                </div>
                <div class="box-impares">
                    <h3>Números Ímpares</h3>
                    <div class="box-saida-numeros"><?=$impar."."?></div>
                    <div class="box-qnt-impares"><span><?=$qntImpar?></span> números ímpares.</div>
                </div>
            </div>
            <div id="ifErro"><?=$erro?></div>
        </section>
    </main>
    <footer>
        <span>Copyright &copy; 2021 | Israel Pablo Coelho</span>
    </footer>
</body>
<script>
    $(document).ready(function () {
        $('.menu').on('click', function () {
            $(".submenu").css("display", "flex");
            $(".submenu").css("flex-direction", "row");
            $(".submenu").css("width", "800px");
            $(".submenu").css("height", "50px");
            $(".submenu").css("visibility", "visible");
            $(".submenu").css("opacity", "1");
            $(".submenu").css("padding-top", "10px");
            $(".submenu").css("margin-left", "65px");
            $(".submenu").css("transition", "1s");
        });
    });
</script>

</html>