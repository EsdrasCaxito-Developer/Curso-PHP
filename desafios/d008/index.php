<?php 
    @$numero = $_POST['numero'] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>
                <span>Número</span>
                <input 
                    type="number" 
                    name="numero"
                    value="<?= $numero ?>">
            </label>
            <input type="submit" value="Calcular Raízes">
        </form>
    </section>

    <?php 
        @$numero = number_format($_POST['numero'], 3, ",", ".") ?? 0;
        @$raiz_q = $numero ** (1/2);
        @$raiz_c = $numero ** (1/3);
        
        @$raiz_q = number_format($raiz_q ,3, ",", ".");
        @$raiz_c = number_format($raiz_c ,3, ",", ".");    
    ?>
    <section>
        <h2>Resultado Final</h2>
        <p>
            Analisando o 
            <strong>número <?= $numero?></strong>, temos:
        </p>
        <ul>
            <li>
                A sua raiz quadrada é 
                <strong><?= $raiz_q?></strong>
            </li>
            <li>
                A sua raiz cúbica é 
                <strong><?= $raiz_c?></strong>
            </li>
        </ul>
    </section>
</body>