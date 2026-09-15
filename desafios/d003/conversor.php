<?php 
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

    $numero = $_GET['numero'] ?? 0;
    $cotacao = $numero / 920;

    $kz_f = numfmt_format_currency($padrao, $numero, "AOA");
    $do_f = numfmt_format_currency($padrao, $cotacao, "USD");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <p>Seus <strong><?=$kz_f?></strong> equivalem a <strong><?=$do_f?></strong></p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>