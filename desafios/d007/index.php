<?php 
    $sal_min = 1380;
    $salario = @$_POST['salario'] ?? 0;

    $sal_n_min = intdiv($salario, $sal_min);
    $sal_r_min = $salario % $sal_min;

    //Formatando os dados

    $sal_min = number_format($sal_min, 2, ",", ".");
    $sal_r_min = number_format($sal_r_min, 2, ",", ".");
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
        <h1>Informe seu salário</h1>
        <form 
            action="<?= $_SERVER['PHP_SELF'] ?>"
            method="post">
            <label for="">
                <span>Salário(R$)</span>
                <input 
                type="number" 
                name="salario" 
                step="0.001"
                value="<?= $salario ?>">
            </label>
            <p>
                Considerando o salário mínimo de 
                <strong>R$ <?= $sal_min ?></strong>
            </p>
            <input type="submit" value="Calcular">
        </form>
        <section id="resultado">
            <h2>Resultado final</h2>
            <p>
                Quem recebe um salário de R$ <?= $salario ?> ganha <strong><?= $sal_n_min ?> salários mínimos</strong>
                + R$ <?= $sal_r_min ?>
            </p>
        </section>
    </main>
</body>
</html>