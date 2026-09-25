<?php 
    $valor1 = $_REQUEST['valor1'] ?? 0;
    $valor2 = $_REQUEST['valor2'] ?? 0;
    $peso1 = $_REQUEST['peso1'] ?? 0;
    $peso2 = $_REQUEST['peso2'] ?? 0;

    $media_aritmetica = 0;
    $media_ponderada = 0;

    if($peso1>0 && $peso2>0){
        $media_aritmetica = ($valor1 + $valor2) / 2;
        $media_ponderada = 
            ($valor1*$peso1 + $valor2*$peso2) / 
            ($peso1 + $peso2);

    }
    $media_aritmetica = number_format($media_aritmetica, 2, ",", ".");
    $media_ponderada = number_format($media_ponderada, 2, ",", ".");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1 class="special">Médias Aritméticas</h1>
        <form 
        action="<?= $_SERVER['PHP_SELF']?>"
        method="post">
            <label for="iv1">
                <span>Valor 1</span>
                <input type="number" name="valor1" id="iv1" value="<?= @$valor1 ?>">
            </label>
            <label for="ip1">
                <span>Peso 1</span>
                <input type="number" name="peso1" id="ip1" value="<?= @$peso1 ?>">
            </label>
            <label for="iv2">
                <span>Valor 2</span>
                <input type="number" name="valor2" id="iv2" value="<?= @$valor2 ?>">
            </label>
            <label for="ip2">
                <span>Peso 2</span>
                <input type="number" name="peso2" id="ip2" value="<?= @$peso2 ?>">
            </label>
            <input type="submit" value="Calcular Médias">
        </form>
        <section id="resultado">
            <h2>Cálculo das médias</h2>
            <p>Analisando os valor <?= $valor1 ?> e <?= $valor2 ?></p>
            <ul>
                <li>
                    A <strong>Média Aritmética Simples</strong> é igual à <?= $media_aritmetica ?>
                </li>
                <li>
                    A <strong>Média Aritmética Ponderada</strong> é igual à <?= $media_ponderada ?>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>