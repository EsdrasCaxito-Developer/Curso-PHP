<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Retroalimentados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado

        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;

        $soma = $valor1 + $valor2;
    ?>
    <main>
        <h1>Somador de Valores</h1>
    <form 
        action="<?=$_SERVER["PHP_SELF"]?>" 
        method="get">
            <label>
                <span>Valor 1</span>
                <input type="number" name="v1" value="<?=$valor1?>">
            </label>
            <label>
                <span>Valor 2</span>
                <input type="number" name="v2" value="<?= $valor2?>">
            </label>
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <p>
            A soma entre os valores 
            <strong><?= $valor1?></strong> e 
            <strong><?= $valor2?></strong> é igual a 
            <strong><?= $soma?></strong>
        </p>
    </section>
</body>
</html>