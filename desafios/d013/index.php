<?php 
    $valor = $_REQUEST['valor'] ?? 0;
    
    $resto = $valor;
    $notas_100 = (int) ($resto/100);
    $resto %= 100;
    $notas_50 = (int) ($resto/50);
    $resto %= 50;
    $notas_10 = (int) ($resto/10);
    $resto %= 10;
    $notas_5 = (int) ($resto/5);
    $resto %= 5;
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
        <h1>Caixa Electrônico</h1>
        <form 
            action="<?= $_SERVER['PHP_SELF']?>"
            method="post">
            <label for="">
                <span>Qual valor vc deseja sacar ?</span>
                <input type="number" name="valor" id="" step="5" value="<?= $valor ?>">
            </label>
            <p>
                *Notas disponíveis: R$100, R$50, R$10, R$5
            </p>
            <input type="submit" value="Sacar">
        </form>
    </main>    
    <?php 
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        $valor = numfmt_format_currency($padrao, $valor, "BRL");
    ?>
    <section id="resultado">
        <h2>Saque de <?= $valor ?> realizado</h2>
        <p>
            O caixa electrônico vai te entregar as seguintes notas:
        </p>
        <ul>
            <li>
                <img src="./images/100-reais.jpg" alt="">
                <sub>x<?= $notas_100 ?></sub>
            </li>
            <li>
                <img src="./images/50-reais.jpg" alt="">
                <sub>x<?= $notas_50 ?></sub>
            </li>
            <li>
                <img src="./images/10-reais.jpg" alt="">
                <sub>x<?= $notas_10 ?></sub>
            </li>
            <li>
                <img src="./images/5-reais.jpg" alt="">
                <sub>x<?= $notas_5 ?></sub>
            </li>
        </ul>
    </section>
</body>
</html>