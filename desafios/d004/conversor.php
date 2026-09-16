<?php 
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

    $numero = $_GET['numero'] ?? 0;
    //$cotacao = $numero / 920;

    $api_key = "46e17b6de4fa6fa26b5e209f";
    $to_code = "USD";
    $api_url = "https://v6.exchangerate-api.com/v6/$api_key/latest/$to_code";

    $data = json_decode(file_get_contents($api_url));
    $cotacao = $data->conversion_rates->AOA;
    $cotacao = $numero / $cotacao;

    $kz_f = numfmt_format_currency($padrao, $numero, "AOA");
    $do_f = numfmt_format_currency($padrao, $cotacao, "USD");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas avançado - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas avançado</h1>
        <p>
            Seus 
            <strong><?=$kz_f?></strong> 
            equivalem a 
            <strong><?=$do_f?></strong>
        </p>
        <button onclick="javascript:history.go(-1)">
            Voltar
        </button>
    </main>
</body>
</html>