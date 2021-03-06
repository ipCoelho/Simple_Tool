<?php
    require_once('functions.php');
   
    if(isset($_POST['btnCalcular'])){
        $tabuada = $_POST['iptTabuada'];
        $contador = $_POST['iptContador'];
        if(!empty($tabuada) && !empty($contador)){
            if(is_numeric($tabuada) && is_numeric($contador)){
                if(!$tabuada === 0 && !$contador === 0){
                    for($indice = 0; $indice <= $contador; $indice++){
                        $equacao = $indice * $tabuada;
                        $resultado = $resultado.$tabuada." x ".$indice." = ".$equacao."<br>";
                    }
                }
                else{
                    $erro = ERRO_VALOR_ZERO;
                }    
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
    <link rel="stylesheet" href="../css/tabuada.css">
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
            <form action="" method="post" id="form-media">
                <div class="div-form">
                    <div class="div-input-father">
                        <div class="div-input">
                            <label for="input" class="label-input">Tabuada do: </label>
                            <input type="text" name="iptTabuada" maxlength="3" class="input" value="<?=$tabuada?>">
                        </div>  
                        <div class="div-input">
                            <label for="input" class="label-input">Até: </label>
                            <input type="text" name="iptContador" maxlength="3" class="input" value="<?=$contador?>">
                        </div>
                    </div>
                    <button type="submit" name="btnCalcular" id="button-calcular">Calcular</button>
                    <div class="div-resultado" ><?=$resultado?><?=$erro?></div>
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