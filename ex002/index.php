<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    //date_default_timezone_set("Africa/Luanda"); - Angola / Luanda
    echo 'Hoje é dia ' . date('d/M/Y');
    echo '<br> E a hora atual é  ' . date('g:i:s');
    ?>
</body>

</html>