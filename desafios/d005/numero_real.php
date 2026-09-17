<?php 
    $numero = $_REQUEST['numero'] ?? 0;
    $n_int = (int) $numero;
    $n_fra = $numero - $n_int;

    $numero = number_format($numero, 3, ",", ".");
    $n_int = number_format($n_int, 0, ",", ".");
    $n_fra = number_format($n_fra, 3, ",", ".");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de número real - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <p>
            Analisando o número 
            <strong><?=$numero?></strong>
             informado pelo usuário: 
            </p>
        <ul>
            <li>
                A parte inteira do número é 
                <strong><?=$n_int?></strong>
            </li>
            <li>
                A parte fraccionária do número é 
                <strong><?=$n_fra?></strong>
            </li>
        </ul>
        <button onclick="javascript:history.go(-1)">
            Voltar
        </button>
    </main>
</body>
</html>