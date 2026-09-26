<?php
    $preco = $_REQUEST['preco'] ?? 0;
    $percent = $_REQUEST['percentual'] ?? 50;

    $aumento = $preco + ($preco * ($percent / 100));

    $aumento = number_format($aumento, 2, ",", ".");
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
        <h1 class="special">Reajustador de preços</h1>
        <form 
        action="<?= $_SERVER['PHP_SELF']?>"
        method="post">
            <label for="ip">
                <span>Preço do produto (R$)</span>
                <input type="number" name="preco" id="ip" step="0.01" value="<?= $preco ?>">
            </label>
            <label for="ipr">
                <span>
                    <strong>
                        Percentual de reajuste 
                        <span id="percentual"></span>
                    </strong>                    
                </span>
                <input type="range" name="percentual" id="ipr" value="<?= $percent ?>">
            </label>
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $preco = number_format($preco, 2, ",", "");
    ?>
    <section id="resultado">
        <h2>Resultado</h2>
        <p>O produto custava <?= $preco ?>, <strong>com <?= $percent ?>% de aumento</strong> vai passar a custar <strong>R$<?= $aumento ?></strong> a apartir de agora.</p>
    </section>

    <script>

        const inputRange = document.getElementById("ipr"),
        percentBox = document.getElementById("percentual");
        const addPercentage = () =>{
            const inputValue = Number(inputRange.value)
            percentual.innerText = `(${inputValue}%)`
        }
        inputRange.addEventListener("change", addPercentage)

        addPercentage();
    </script>
</body>
</html>