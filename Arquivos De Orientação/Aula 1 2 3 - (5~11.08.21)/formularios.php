<?php
    if (isset($_GET['btnSalvar'])) {
        //variáveis - Coletando GET's do html.
        $nome = $_GET["txtNome"];
        $uf = $_GET["sltUf"];
        $sexo = $_GET["rdoSexo"];
        $senha = $_GET["pwdSenha"]; 
        $obs = $_GET["txtObs"]; 
        //isset() - Pra verificar quais idiomas foram selecionados.
        if (isset($_GET["chkPortugues"])) {
            $idiomaPortugues = $_GET["chkPortugues"];
        }
        else {$idiomaPortugues = null;}

        if (isset($_GET["chkIngles"])) {
            $idiomaIngles =  $_GET["chkIngles"];
        }
        else {$idiomaIngles = null;}

        if (isset($_GET["chkFrances"])) {
            $idiomaFrances = $_GET["chkFrances"];
        }
        else {$idiomaFrances = null;}
        //echos.
        echo("O nome digitado foi: <span class='destaque'>".$nome."</span>");
        echo("<br>A UF escolhida foi: ".$uf);
        echo("<br>O sexo escolhido foi: ".$sexo);
        echo("<br>Os idiomas escolhidos foram: ".$idiomaPortugues." ".$idiomaIngles." ".$idiomaFrances);
        echo("<br>A senha digitada foi: ".$senha);
        echo("<br>A observação digitada foi: ".$obs);
    }
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Formulários</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id="formulario-contatos">
        <form name="formularioContatos" action="" method="get">
            <div>
                <label>Nome:</label>
                <input name="txtNome" type="text" size="50" maxlength="40" placeholder="Insira seu nome">
            </div>
            <div>
                <label>UF:</label>
                <select name="sltUf">
                    <option value="NULL" selected>Selecione...</option>
                    <option value="SP">São Paulo</option>
                    <option value="RJ">Rio de Janeiro</option>
                </select>
            </div>
            <div>
                <label>Sexo:</label>
                <input type="radio" name="rdoSexo" value="F" checked> Feminino
                <input type="radio" name="rdoSexo" value="M"> Masculino
            </div>
            <div>
                <label>Idiomas:</label>
                <input type="checkbox" name="chkPortugues" value="pt" checked> Português
                <input type="checkbox" name="chkIngles" value="en"> Inglês
                <input type="checkbox" name="chkFrances" value="fr"> Francês
            </div>
            <div>
                <label>Senha:</label>
                <input type="password" name="pwdSenha" size="20" maxlength="10">
            </div>
            <div>
                <label>Obs:</label>
                <textarea name="txtObs" cols="30" rows="5" placeholder="Observações..."></textarea>
            </div>
            <input type="submit" name="btnSalvar" value="Salvar">
            <input type="reset" name="btnLimpar" value="Limpar">
        </form>
    </div>
</body>
</html>

