<?php
require_once "constantes.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora OO</title>
    </head>
    <body>
        <form action="resultado.php" method="GET">
            <input type="number" name="valor1">

            <select name="operacao">
                <option value="<?=unserialize(SOMAR)["codigo"]?>"><?=unserialize(SOMAR)["nome"]?></option>
                <option value="<?=unserialize(SUBTRAIR)["codigo"]?>"><?=unserialize(SUBTRAIR)["nome"]?></option>
                <option value="<?=unserialize(MULTIPLICAR)["codigo"]?>"><?=unserialize(MULTIPLICAR)["nome"]?></option>
                <option value="<?=unserialize(DIVIDIR)["codigo"]?>"><?=unserialize(DIVIDIR)["nome"]?></option>
            </select>

            <input type="number" name="valor2">

            <button type="submit">OK</button>
        </form>
    </body>
</html>