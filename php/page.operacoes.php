<?php
require_once('functions.php');
// variáveis
$num1 = (double) 0;
$num2 = (double) 0;
$operacao = (string) null;
$resultado = (string) null;
// msgs de Erro
$erro = (string) null;
const ERRO_DADOS_NAO_NUMERICOS = "<span class='msgErro'>Valores não numéricos!</span>";
const ERRO_CAIXA_VAZIA = "<span class='msgErro'>Caixas Vazias!</span>";

if(isset($_POST['btnCalcular'])){
    $num1 = $_POST['iptValor1'];
    $num2 = $_POST['iptValor2'];
    $operacao = strtoupper($_POST['sltOperacao']);
    if(!$num1 == "" && !$num2 == ""){
        if(is_numeric($num1) && is_numeric($num2)){
            $resultado = calcular($num1, $num2, $operacao);
        }
        else{
            $erro = ERRO_DADOS_NAO_NUMERICOS;
        }
    }
    else{
        $erro = ERRO_CAIXA_VAZIA;
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
    <link rel="stylesheet" href="../css/operacoes.css">
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
            <form action="page.operacoes.php" method="post" id="form-media">
                <div class="div-form">
                    <div class="div-input">
                        <input type="text" name="iptValor1" class="inputs">
                            <select name="sltOperacao" id="select-operacao">
                                <option value="som">+</option>
                                <option value="sub">-</option>
                                <option value="mul">*</option>
                                <option value="div">/</option>
                            </select>
                        <input type="text" name="iptValor2" class="inputs">    
                    </div>
                    <button type="submit" name="btnCalcular" id="button-calcular">Calcular</button>
                    <div class="div-resultado"><?=$resultado;?><?=$erro;?></div>
                </div>
            </form>
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