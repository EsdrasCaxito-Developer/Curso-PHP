<?php 
    $tempo = $_REQUEST['segundos'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form 
            action="<?=$_SERVER['PHP_SELF'] ?>"
            method="post">
            <label for="">
                <span>Qual o total de segundos ?</span>
                <input type="number" name="segundos" id="" value="<?=$tempo?>">
            </label>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($tempo, 0, ',', '.')?> segundos</strong> equivalem a um total de: </p>

        <?php        
            $semanas = intdiv($tempo, 604800);
            $tempo %= 604800;
            $dias = intdiv($tempo, 86400);
            $tempo %= 86400;
            $horas = intdiv($tempo, 3600);
            $tempo %= 3600;
            $minutos = intdiv($tempo, 60);
            $tempo %= 60;
            $segundos = $tempo;
        ?>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>