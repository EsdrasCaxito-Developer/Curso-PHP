<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $min = 0;
            $max = 100;
            $randomNumber = mt_rand($min, $max);
        ?>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            Gerando um número aleatório entre 0 e 100...
        </p>
        <p>
            O número aleatório gerado foi 
            <strong>
                <?=$randomNumber?>
            </strong>
        </p>

        <button onclick="location.reload()">
            &#x1f504; Gerar
        </button>
    </main>
</body>
</html>