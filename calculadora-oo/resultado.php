<?php
require_once "Calculadora.php";

$calc = new Calculadora("CALC-FAPCE");
$resultado = $calc->calcular($_GET["valor1"], $_GET["valor2"], $_GET["operacao"]);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>
    <body>

        <?php
        if (!empty($resultado)):?>

            <h3><?=$calc->getResultadoFormatado();?></h3>

        <?php
        else:?>

            <h3 style="color:red">Valores vazios</h3>

        <?php
        endif;?>

        <a href="index.php">Voltar</a>
    </body>
</html>